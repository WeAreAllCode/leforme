<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /* LOCATIONS INDEX */
    public function index()
    {
        $locations = Location::orderBy('id')->get();
        return view('locations.index', compact('locations'));
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
    public function show(Location $location)
    {
        return view('locations.show', compact('location'));
    }

    /* LOCATIONS EDIT */
    public function edit($id)
    {
        //
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
