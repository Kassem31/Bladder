<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Models\Bladder;
use App\Http\Requests\StoreMachineRequest;
use App\Http\Requests\UpdateMachineRequest;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Machine::with(['leftBladder', 'rightBladder']);

        // Apply filters
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('Code', 'like', "%{$search}%");
            });
        }
        
        // Filter by machine code
        if ($request->filled('Code')) {
            $query->where('Code', 'like', "%{$request->Code}%");
        }
        
        // Filter by bladder code (left or right) - text search
        if ($request->filled('BladderCode')) {
            $bladderCode = $request->BladderCode;
            $query->where(function($q) use ($bladderCode) {
                $q->whereHas('leftBladder', function($subQuery) use ($bladderCode) {
                    $subQuery->where('BladderCode', 'like', "%{$bladderCode}%");
                })->orWhereHas('rightBladder', function($subQuery) use ($bladderCode) {
                    $subQuery->where('BladderCode', 'like', "%{$bladderCode}%");
                });
            });
        }
        
        // Filter by status (working/stopped)
        if ($request->filled('Status')) {
            if ($request->Status === 'working') {
                $query->whereNotNull('LeftBladderId')
                      ->whereNotNull('RightBladderId');
            } elseif ($request->Status === 'stopped') {
                $query->where(function($q) {
                    $q->whereNull('LeftBladderId')
                      ->orWhereNull('RightBladderId');
                });
            }
        }

        $machines = $query->paginate(10)->withQueryString();

        return view('machines.index', compact('machines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bladders = Bladder::where('Status', 'available')->get();
        return view('machines.create', compact('bladders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMachineRequest $request)
    {
        Machine::create($request->validated());

        return redirect()->route('machines.index')
                         ->with('success', __('common.machine_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Machine $machine)
    {
        $machine->load(['leftBladder', 'rightBladder', 'bladderTransactions']);
        return view('machines.show', compact('machine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Machine $machine)
    {
        $bladders = Bladder::where('Status', 'available')
                          ->orWhereIn('id', [$machine->LeftBladderId, $machine->RightBladderId])
                          ->get();
        return view('machines.edit', compact('machine', 'bladders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMachineRequest $request, Machine $machine)
    {
        $machine->update($request->validated());

        return redirect()->route('machines.index')
                         ->with('success', __('common.machine_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Machine $machine)
    {
        // Check if machine has any bladder transactions
        if ($machine->bladderTransactions()->exists()) {
            // delete all bladder transactions associated with this machine
            $machine->bladderTransactions()->delete();
            // delete the machine
        }

        $machine->delete();

        return redirect()->route('machines.index')
                         ->with('success', __('common.machine_deleted'));
    }
}
