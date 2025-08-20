<?php

namespace App\Http\Controllers;

use App\Models\Bladder;
use App\Models\Machine;
use App\Models\BladderSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBladderRequest;
use App\Http\Requests\UpdateBladderRequest;

class BladderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(!Auth::user()->is_super_admin && !Auth::user()->hasPermission('list_bladders')) {
            abort(403, __('common.unauthorized'));
        }
        $query = Bladder::with('bladderSize');

        // Filter by Bladder Code
        if ($request->filled('BladderCode')) {
            $query->where('BladderCode', 'LIKE', '%' . $request->BladderCode . '%');
        }

        // Filter by Status
        if ($request->filled('Status')) {
            $query->where('Status', $request->Status);
        }

        // Filter by Bladder Size
        if ($request->filled('BladderSizeId')) {
            $query->where('BladderSizeId', $request->BladderSizeId);
        }

        // Filter by Expiry Date From
        if ($request->filled('ExpiryDateFrom')) {
            $query->where('ExpiryDate', '>=', $request->ExpiryDateFrom);
        }

        // Filter by Expiry Date To
        if ($request->filled('ExpiryDateTo')) {
            $query->where('ExpiryDate', '<=', $request->ExpiryDateTo);
        }

        $bladders = $query->paginate(10)->withQueryString();
        $bladderSizes = BladderSize::all();
        return view('bladders.index', compact('bladders', 'bladderSizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Auth::user()->is_super_admin && !Auth::user()->hasPermission('create_bladders')) {
            abort(403, __('common.unauthorized'));
        }
        $bladderSizes = BladderSize::all();
        return view('bladders.create', compact('bladderSizes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBladderRequest $request)
    {
        Bladder::create($request->validated());
        return redirect()->route('bladders.index')
            ->with('success', __('common.bladder_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Bladder $bladder)
    {
        if(!Auth::user()->is_super_admin && !Auth::user()->hasPermission('show_bladders')) {
            abort(403, __('common.unauthorized'));
        }
        $bladder->load('bladderSize', 'bladderTransactions');
        return view('bladders.show', compact('bladder'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bladder $bladder)
    {
        if(!Auth::user()->is_super_admin && !Auth::user()->hasPermission('edit_bladders')) {
            abort(403, __('common.unauthorized'));
        }
        $bladderSizes = BladderSize::all();
        return view('bladders.edit', compact('bladder', 'bladderSizes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBladderRequest $request, Bladder $bladder)
    {
        $bladder->update($request->validated());
        return redirect()->route('bladders.index')
            ->with('success', __('common.bladder_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bladder $bladder)
    {
        // Check if bladder is being used by any machines
        $machinesUsingBladder = Machine::where('LeftBladderId', $bladder->Id)
            ->orWhere('RightBladderId', $bladder->Id)
            ->exists();

        if ($machinesUsingBladder) {
            return redirect()->route('bladders.index')
                ->with('error', __('common.bladder_delete_machine_use'));
        }

        // Check if bladder has any transactions
        if ($bladder->bladderTransactions()->exists()) {
            return redirect()->route('bladders.index')
                ->with('error', __('common.bladder_delete_has_transactions'));
        }

        $bladder->delete();
        return redirect()->route('bladders.index')
            ->with('success', __('common.bladder_deleted'));
    }
}
