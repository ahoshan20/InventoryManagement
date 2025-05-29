<?php

namespace App\Http\Controllers;

use App\Models\CustomerContact;
use App\Http\Requests\StoreCustomerContactRequest;
use App\Http\Requests\UpdateCustomerContactRequest;

class CustomerContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCustomerContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerContact $CustomerContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerContact $CustomerContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerContactRequest $request, CustomerContact $CustomerContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerContact $CustomerContact)
    {
        //
    }
}
