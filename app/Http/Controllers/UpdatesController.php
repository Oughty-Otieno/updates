<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Update;

class UpdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $week_number = date('W');
        $updates = Update::where('week_number', $week_number)->get();

        return view('updates.index', [
        'updates' => $updates,
        'week_number' => $week_number
      ])->layout('layouts.app');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $update = Update::where('id', $id)->get()[0];
        $squadList = [
          'BFSI',
          'IoT/Integrated Solutions',
          'Digital Business Hub',
          'Network Automation',
          'Base Solution',
          'Fixed Data COE',
          'Home Base Growth',
          'Home Convergence and Experience',
          'Falcon/Mocha'
        ];
        return view('updates.edit', [
        'update' => $update,
        'squadList'=>$squadList
      ])->layout('layouts.app');
    }

    /**
     * Update the specified resource in storage.
     */

     protected $rules = [

     ];

    public function update(Request $request, string $id)
    {
      $validated = $request->validate([
        'squad' => 'required|string',
        'projects_deployed' => 'required|string',
        'projects_sit' => 'required|string',
        'projects_uat' => 'required|string',
        'incidents' => 'required|string',
        'other_updates' => 'nullable|string',
        'week_number' => 'required|integer',
      ]);

      Update::find($id)->update($validated);

      // Redirect back with a success message
      return redirect()->route('updates.index')->with('success', 'Update saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $update = Update::find($id);
      $update->delete();

      return redirect()->route('updates.index')->with('message', 'Update successfully deleted!');
    }
}
