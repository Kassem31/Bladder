<?php

namespace App\Http\Controllers;

use App\Models\Finding;
use App\Http\Requests\StoreFindingRequest;
use App\Http\Requests\UpdateFindingRequest;
use Illuminate\Http\Request;

class FindingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Finding::query();

        // Apply filters
        if ($request->filled('Description')) {
            $query->where('Description', 'LIKE', '%' . $request->Description . '%');

        }

        $findings = $query->paginate(10)->withQueryString();

        return view('findings.index', compact('findings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('findings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFindingRequest $request)
    {
        Finding::create($request->validated());

        return redirect()->route('findings.index')
                         ->with('success', __('common.finding_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Finding $finding)
    {
        $finding->load('maintenanceFindings.maintenanceTransaction');
        return view('findings.show', compact('finding'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Finding $finding)
    {
        return view('findings.edit', compact('finding'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFindingRequest $request, Finding $finding)
    {
        $finding->update($request->validated());

        return redirect()->route('findings.index')
                         ->with('success', __('common.finding_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Finding $finding)
    {
        // Check if finding is being used by any maintenance findings
        if ($finding->maintenanceFindings()->exists()) {
            return redirect()->route('findings.index')
                ->with('error', __('common.finding_delete_in_use'));
        }

        $finding->delete();

        return redirect()->route('findings.index')
                         ->with('success', __('common.finding_deleted'));
    }
}
