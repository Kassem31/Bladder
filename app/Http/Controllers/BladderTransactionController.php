<?php

namespace App\Http\Controllers;

use App\Models\BladderTransaction;
use App\Models\Bladder;
use App\Models\Machine;
use App\Http\Requests\StoreBladderTransactionRequest;
use App\Http\Requests\UpdateBladderTransactionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BladderTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = BladderTransaction::with(['bladder', 'machine']);

        // Apply filters
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('TransactionType', 'like', "%{$search}%")
                  ->orWhere('Discriminator', 'like', "%{$search}%")
                  ->orWhereHas('bladder', function ($bladderQuery) use ($search) {
                      $bladderQuery->where('BladderCode', 'like', "%{$search}%");
                  })
                  ->orWhereHas('machine', function ($machineQuery) use ($search) {
                      $machineQuery->where('Code', 'like', "%{$search}%");
                  });
            });
        }

        if ($request->filled('TransactionType')) {
            $query->where('TransactionType', $request->TransactionType);
        }
        
        // Filter by Direction (for Mount/Dismount transactions)
        if ($request->filled('Direction') && in_array($request->TransactionType, ['Mount', 'Dismount'])) {
            $query->where('Discriminator', $request->Direction);
        }
        
        // Filter by BladderCode
        if ($request->filled('BladderCode')) {
            $bladderCode = $request->BladderCode;
            $query->whereHas('bladder', function($q) use ($bladderCode) {
                $q->where('BladderCode', 'like', "%{$bladderCode}%");
            });
        }

        // Filter by Date From
        if ($request->filled('DateFrom')) {
            $query->whereDate('CreatedAt', '>=', $request->DateFrom);
        }

        // Filter by Date To
        if ($request->filled('DateTo')) {
            $query->whereDate('CreatedAt', '<=', $request->DateTo);
        }

        $bladderTransactions = $query->orderBy('CreatedAt', 'desc')->paginate(10)->withQueryString();
        
        // Get the latest transaction ID for each bladder
        $latestBladderIds = DB::table('BladderTransactions')
            ->select('BladderId')
            ->distinct()
            ->pluck('BladderId')
            ->toArray();
            
        $latestTransactionIds = [];
        foreach ($latestBladderIds as $bladderId) {
            $latest = BladderTransaction::where('BladderId', $bladderId)
                ->orderByDesc('CreatedAt')
                ->first();
            if ($latest) {
                $latestTransactionIds[] = $latest->Id;
            }
        }

        return view('bladder-transactions.index', compact('bladderTransactions', 'latestTransactionIds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bladders = Bladder::all();
        $machines = Machine::all();
        $validTransactionTypes = BladderTransaction::VALID_TRANSACTION_TYPES;
        return view('bladder-transactions.create', compact('bladders', 'machines', 'validTransactionTypes'));
    }
    
    /**
     * Show form for creating a new Dismount transaction.
     */
    public function createDismount()
    {        
        // Get bladders with no transactions or last transaction = "Mount"
        $latest = DB::table('BladderTransactions')
            ->select('BladderId', DB::raw('MAX(CreatedAt) as MaxDate'))
            ->groupBy('BladderId');
            
        $eligible_bladder_ids = DB::table('BladderTransactions as bt')
            ->joinSub($latest, 'latest', function ($join) {
                $join->on('bt.BladderId', '=', 'latest.BladderId')
                    ->on('bt.CreatedAt', '=', 'latest.MaxDate');
            })
            ->where('bt.TransactionType', '=', 'Mount')
            ->pluck('bt.BladderId');
            
        // Get all bladder IDs
        $all_bladder_ids = Bladder::pluck('Id');
        $bladders_with_transactions = DB::table('BladderTransactions')
            ->select('BladderId')
            ->distinct()
            ->pluck('BladderId');
            
        $bladders_without_transactions = $all_bladder_ids->diff($bladders_with_transactions);
        
        // For bladders with no transactions, only include those with "mounted" status
        // or default status (not "ready", "test", or "maintenance")
        $new_eligible_bladders = Bladder::whereIn('Id', $bladders_without_transactions)
            ->where(function($query) {
                $query->where('Status', 'mounted')
                      ->orWhereNotIn('Status', ['ready', 'test', 'maintenance']);
            })
            ->pluck('Id');
        
        // Combine both sets of eligible bladders
        $eligible_bladder_ids = $eligible_bladder_ids->concat($new_eligible_bladders);
        $bladders = Bladder::whereIn('Id', $eligible_bladder_ids)->get();

                foreach ($bladders as $bladder) {
            // Find if this bladder is mounted on a machine
            $machineLeft = Machine::where('LeftBladderId', $bladder->Id)->first();
            $machineRight = Machine::where('RightBladderId', $bladder->Id)->first();
            
            if ($machineLeft) {
                $bladder->mountInfo = "Left side of " . $machineLeft->Code;
            } elseif ($machineRight) {
                $bladder->mountInfo = "Right side of " . $machineRight->Code;
            } else {
                $bladder->mountInfo = "Not mounted";
            }
        }
        
        return view('bladder-transactions.create-dismount', compact('bladders'));
    }
    
    /**
     * Show form for creating a new Maintenance transaction.
     */
    public function createMaintenance()
    {
        $machines = Machine::all();
        $findings = \App\Models\Finding::all();
        
        // Get bladders where the last transaction is "Dismount"
        $latest = DB::table('BladderTransactions')
            ->select('BladderId', DB::raw('MAX(CreatedAt) as MaxDate'))
            ->groupBy('BladderId');
            
        $eligible_bladder_ids = DB::table('BladderTransactions as bt')
            ->joinSub($latest, 'latest', function ($join) {
                $join->on('bt.BladderId', '=', 'latest.BladderId')
                    ->on('bt.CreatedAt', '=', 'latest.MaxDate');
            })
            ->where('bt.TransactionType', '=', 'Dismount')
            ->pluck('bt.BladderId');
        
        // Get all bladder IDs
        $all_bladder_ids = Bladder::pluck('Id');
        // Get bladders with any transactions
        $bladders_with_transactions = DB::table('BladderTransactions')
            ->select('BladderId')
            ->distinct()
            ->pluck('BladderId');
        // Find bladders without transactions
        $bladders_without_transactions = $all_bladder_ids->diff($bladders_with_transactions);
        
        // For bladders without transactions, include those with available status
        // but not those with ready, test, or maintenance status
        $available_bladders = Bladder::whereIn('Id', $bladders_without_transactions)
            ->where('Status', 'available')
            ->whereNotIn('Status', ['ready', 'test', 'maintenance', 'mounted'])
            ->pluck('Id');
        
        // Combine both sets of eligible bladders
        $all_eligible_bladder_ids = $eligible_bladder_ids->concat($available_bladders);
            
        $bladders = Bladder::whereIn('Id', $all_eligible_bladder_ids)->get();
        
        return view('bladder-transactions.create-maintenance', compact('bladders', 'machines', 'findings'));
    }
    
    /**
     * Show form for creating a new Test transaction.
     */
    public function createTest()
    {
        $machines = Machine::all();
        
        // Get bladders where the last transaction is "Maintenance"
        $latest = DB::table('BladderTransactions')
            ->select('BladderId', DB::raw('MAX(CreatedAt) as MaxDate'))
            ->groupBy('BladderId');
            
        $eligible_bladder_ids = DB::table('BladderTransactions as bt')
            ->joinSub($latest, 'latest', function ($join) {
                $join->on('bt.BladderId', '=', 'latest.BladderId')
                    ->on('bt.CreatedAt', '=', 'latest.MaxDate');
            })
            ->where('bt.TransactionType', '=', 'Maintenance')
            ->pluck('bt.BladderId');
        
        // Get all bladder IDs
        $all_bladder_ids = Bladder::pluck('Id');
        // Get bladders with any transactions
        $bladders_with_transactions = DB::table('BladderTransactions')
            ->select('BladderId')
            ->distinct()
            ->pluck('BladderId');
        // Find bladders without transactions
        $bladders_without_transactions = $all_bladder_ids->diff($bladders_with_transactions);
        
        // Get bladders with maintenance status and no transactions
        $maintenance_bladders = Bladder::whereIn('Id', $bladders_without_transactions)
            ->where('Status', 'maintenance')
            ->pluck('Id');
        
        // Combine both sets of eligible bladders
        $all_eligible_bladder_ids = $eligible_bladder_ids->concat($maintenance_bladders);
        $bladders = Bladder::whereIn('Id', $all_eligible_bladder_ids)->get();
        
        return view('bladder-transactions.create-test', compact('bladders', 'machines'));
    }
    
    /**
     * Show form for creating a new Mount transaction.
     */
    public function createMount()
    {
        $machines = Machine::all();
        
        // Get bladders where the last transaction is "Test"
        $latest = DB::table('BladderTransactions')
            ->select('BladderId', DB::raw('MAX(CreatedAt) as MaxDate'))
            ->groupBy('BladderId');
            
        $eligible_bladder_ids = DB::table('BladderTransactions as bt')
            ->joinSub($latest, 'latest', function ($join) {
                $join->on('bt.BladderId', '=', 'latest.BladderId')
                    ->on('bt.CreatedAt', '=', 'latest.MaxDate');
            })
            ->where('bt.TransactionType', '=', 'Test')
            ->pluck('bt.BladderId');
        
        // Get all bladder IDs
        $all_bladder_ids = Bladder::pluck('Id');
        // Get bladders with any transactions
        $bladders_with_transactions = DB::table('BladderTransactions')
            ->select('BladderId')
            ->distinct()
            ->pluck('BladderId');
        // Find bladders without transactions
        $bladders_without_transactions = $all_bladder_ids->diff($bladders_with_transactions);
        
        // Get bladders with ready or test status and no transactions
        $ready_or_test_bladders = Bladder::whereIn('Id', $bladders_without_transactions)
            ->whereIn('Status', ['ready', 'test'])
            ->pluck('Id');
        
        // Combine both sets of eligible bladders
        $all_eligible_bladder_ids = $eligible_bladder_ids->concat($ready_or_test_bladders);
        $bladders = Bladder::whereIn('Id', $all_eligible_bladder_ids)->get();
        
        return view('bladder-transactions.create-mount', compact('bladders', 'machines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBladderTransactionRequest $request)
    {
        $validated = $request->validated();
        
        // Always set CreatedAt to the current time as string
        $validated['CreatedAt'] = now()->format('Y-m-d H:i:s');
        
        // Check if this transaction is valid in the workflow sequence
        $bladderId = $validated['BladderId'];
        $transactionType = $validated['TransactionType'];
        
        $nextAllowedType = BladderTransaction::getNextAllowedTransactionType($bladderId);
        if ($nextAllowedType !== $transactionType) {
            return redirect()->back()
                ->withInput()
                ->with('error', __('common.invalid_transaction_sequence', ['type' => $nextAllowedType]));
        }
        
        // Special handling for Mount transactions
        $transactionType = $validated['TransactionType'];
        
        // For non-Mount transactions, MachineId should be null
        if ($transactionType !== 'Mount' && empty($validated['MachineId'])) {
            $validated['MachineId'] = null;
        }
        
        // For non-Mount transactions, use default discriminator if not provided
        if ($transactionType !== 'Mount' && empty($validated['Discriminator'])) {
            $validated['Discriminator'] = $transactionType . ' Transaction';
        }        // For Mount transactions, check direction and availability
        if ($transactionType === 'Mount') {
            // Direction will be handled as Discriminator in the database
            $direction = $request['Direction'];
            $validated['Discriminator'] = $direction;
            
            $machineId = $validated['MachineId'];
            $machine = Machine::find($machineId);
            
            // Check if the machine is already full
            if ($machine->Full || ($machine->LeftBladderId && $machine->RightBladderId)) {
                return redirect()->back()
                    ->withInput()
                    ->with('error', __('common.machine_both_sides_mounted'));
            }
            
            // Check if the specified direction already has a bladder
            if ($direction === 'Left' && $machine->LeftBladderId) {
                return redirect()->back()
                    ->withInput()
                    ->with('error', __('common.machine_left_side_mounted'));
            }
            
            if ($direction === 'Right' && $machine->RightBladderId) {
                return redirect()->back()
                    ->withInput()
                    ->with('error', __('common.machine_right_side_mounted'));
            }
            
            // Update the machine with the new bladder
            if ($direction === 'Left') {
                $machine->LeftBladderId = $validated['BladderId'];
            } else {
                $machine->RightBladderId = $validated['BladderId'];
            }
            
            // Update machine status based on bladders
            $machine->Full = ($machine->LeftBladderId && $machine->RightBladderId);
            
            $machine->save();
            
            // Update bladder status to in_use
            $bladder = Bladder::find($validated['BladderId']);
            $bladder->Status = 'in_use';
            $bladder->save();
        }
        
        // For Dismount transactions, detach the bladder from its machine
        if ($transactionType === 'Dismount') {
            $bladderId = $validated['BladderId'];
            $bladder = Bladder::find($bladderId);
            
            // Find the machine this bladder is mounted on
            $machines = Machine::where('LeftBladderId', $bladderId)
                               ->orWhere('RightBladderId', $bladderId)
                               ->get();
            
            foreach ($machines as $machine) {
                // Update the transaction with the machine ID
                $validated['MachineId'] = $machine->Id;
                
                // Determine if it was a left or right bladder
                if ($machine->LeftBladderId == $bladderId) {
                    $validated['Discriminator'] = 'Left';
                    $machine->LeftBladderId = null;
                } else if ($machine->RightBladderId == $bladderId) {
                    $validated['Discriminator'] = 'Right';
                    $machine->RightBladderId = null;
                }
                
                // Machine is no longer full if we're removing a bladder
                $machine->Full = false;
                $machine->save();
            }
            
            // Update bladder status to available
            $bladder->Status = 'available';
            $bladder->save();
        }
        
        // Update bladder status based on transaction type
        $bladder = Bladder::find($validated['BladderId']);
        switch ($transactionType) {
            case 'Maintenance':
                $bladder->Status = 'maintenance';
                break;
            case 'Test':
                $bladder->Status = 'test';
                break;
            case 'Mount':
                $bladder->Status = 'mounted';
                break;
            case 'Dismount':
            default:
                $bladder->Status = 'available';
                break;
        }
        $bladder->save();
        
        // Store the transaction
        $transaction = BladderTransaction::create($validated);        // If it's a maintenance transaction and findings are selected, store them
        if ($transactionType === 'Maintenance' && isset($request['findings']) && !empty($request['findings'])) {
            $findings = $request['findings'];
            
            // Create maintenance findings records
            foreach ($findings as $findingId) {
                \App\Models\MaintenanceFinding::create([
                    'MaintenanceTransactionId' => $transaction->Id,
                    'FindingId' => $findingId
                ]);
            }
        }

        return redirect()->route('bladder-transactions.index')
                         ->with('success', __('common.bladder_transaction_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(BladderTransaction $bladderTransaction)
    {
        $bladderTransaction->load(['bladder', 'machine', 'maintenanceFindings.finding']);
        
        // Check if this is the latest transaction for the bladder
        $isLatestTransaction = $bladderTransaction->isLatestTransaction();
        
        return view('bladder-transactions.show', compact('bladderTransaction', 'isLatestTransaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BladderTransaction $bladderTransaction)
    {
        $bladders = Bladder::all();
        $machines = Machine::all();
        return view('bladder-transactions.edit', compact('bladderTransaction', 'bladders', 'machines'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBladderTransactionRequest $request, BladderTransaction $bladderTransaction)
    {
        $bladderTransaction->update($request->validated());

        return redirect()->route('bladder-transactions.index')
                         ->with('success', __('common.bladder_transaction_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BladderTransaction $bladderTransaction)
    {
        // Check if bladder transaction has any maintenance findings
        if ($bladderTransaction->maintenanceFindings()->exists()) {
            return redirect()->route('bladder-transactions.index')
                ->with('error', __('common.transaction_delete_has_findings'));
        }

        // Check if this is the latest transaction for this bladder
        if (!$bladderTransaction->isLatestTransaction()) {
            return redirect()->route('bladder-transactions.index')
                ->with('error', __('common.transaction_delete_not_recent'));
        }

        $bladderTransaction->delete();

        return redirect()->route('bladder-transactions.index')
                         ->with('success', __('common.bladder_transaction_deleted'));
    }
}
