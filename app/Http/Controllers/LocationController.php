<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    /* LOCATIONS INDEX */
    public function index()
    {
        return view('locations.index');
    }

    /* LOCATIONS CREATE */
    public function create()
    {
        return view('locations.create');
    }

    /* LOCATIONS STORE */
    public function store(Request $request)
    {
        //
    }

    /* LOCATIONS SHOW */
    public function show($id)
    {
        return view('locations.show');
    }

    /* LOCATIONS EDIT */
    public function edit($id)
    {
        return view('locations.edit');
    }

    /* LOCATIONS UPDATE */
    public function update(Request $request, $id)
    {
        //
    }

    /* LOCATIONS DELETE */
    public function destroy($id)
    {
        //
    }
}
