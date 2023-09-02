<?php

namespace App\Http\Controllers;

use App\Models\ManageLoans;
use Illuminate\Http\Request;

class ManageLoansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage_loans.index');
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
     * @param  \App\Models\ManageLoans  $manageLoans
     * @return \Illuminate\Http\Response
     */
    public function show(ManageLoans $manageLoans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManageLoans  $manageLoans
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageLoans $manageLoans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageLoans  $manageLoans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManageLoans $manageLoans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManageLoans  $manageLoans
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageLoans $manageLoans)
    {
        //
    }
}
