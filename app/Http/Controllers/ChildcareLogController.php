<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChildcareLogRequest;
use App\Http\Requests\UpdateChildcareLogRequest;
use App\Models\ChildcareLog;
use Inertia\Inertia;

class ChildcareLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $childcareLogs = ChildcareLog::with('user', 'category')
        ->get();
        return Inertia::render('ChildcareLogs/Index', ['childcareLogs' => $childcareLogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('ChildcareLogs/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChildcareLogRequest $request)
    {
        ChildcareLog::create($request->validated());
        return redirect()->route('childcare_logs.index')->with('success', 'Childcare log created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ChildcareLog $childcareLog)
    {
        return Inertia::render('ChildcareLogs/Show', ['childcareLog' => $childcareLog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChildcareLog $childcareLog)
    {
        return Inertia::render('ChildcareLogs/Edit', ['childcareLog' => $childcareLog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChildcareLogRequest $request, ChildcareLog $childcareLog)
    {
        $childcareLog->update($request->validated());
        return redirect()->route('childcare_logs.index')->with('success', 'Childcare log updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChildcareLog $childcareLog)
    {
        $childcareLog->delete();
        return redirect()->route('childcare_logs.index')->with('success', 'Childcare log deleted successfully.');
    }
}
