<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageScheduleController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage_schedule.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManageSchedule  $manageSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(ManageSchedule $manageSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManageSchedule  $manageSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageSchedule $manageSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageSchedule  $manageSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManageSchedule $manageSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManageSchedule  $manageSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageSchedule $manageSchedule)
    {
        //
    }
}
