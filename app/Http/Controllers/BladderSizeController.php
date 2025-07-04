<?php

namespace App\Http\Controllers;

use App\Models\BladderSize;
use App\Http\Requests\StoreBladderSizeRequest;
use App\Http\Requests\UpdateBladderSizeRequest;
use Illuminate\Http\Request;

class BladderSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = BladderSize::query();
        if ($request->filled('Name')) {
            $query->where('Name', 'LIKE', '%' . $request->Name . '%');
        }

        $bladderSizes = $query->paginate(10)->withQueryString();
        return view('bladder-sizes.index', compact('bladderSizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bladder-sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBladderSizeRequest $request)
    {
        BladderSize::create($request->validated());
        return redirect()->route('bladder-sizes.index')
            ->with('success', __('common.bladder_size_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(BladderSize $bladderSize)
    {
        return view('bladder-sizes.show', compact('bladderSize'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BladderSize $bladderSize)
    {
        return view('bladder-sizes.edit', compact('bladderSize'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBladderSizeRequest $request, BladderSize $bladderSize)
    {
        $bladderSize->update($request->validated());
        return redirect()->route('bladder-sizes.index')
            ->with('success', __('common.bladder_size_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BladderSize $bladderSize)
    {
        // Check if bladder size is being used by any bladders
        if ($bladderSize->bladders()->exists()) {
            return redirect()->route('bladder-sizes.index')
                ->with('error', __('common.bladder_size_delete_in_use'));
        }

        $bladderSize->delete();
        return redirect()->route('bladder-sizes.index')
            ->with('success', __('common.bladder_size_deleted'));
    }
}
