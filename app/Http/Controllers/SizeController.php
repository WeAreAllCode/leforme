<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SizeController extends Controller
{
    /* SIZES INDEX */
    public function index()
    {
        return view('sizes.index');
    }

    /* SIZES CREATE */
    public function create()
    {
        return view('sizes.create');
    }

    /* SIZES STORE */
    public function store(Request $request)
    {
        //
    }

    /* SIZES SHOW */
    public function show($id)
    {
        return view('sizes.show');
    }

    /* SIZES EDIT */
    public function edit($id)
    {
        return view('sizes.edit');
    }

    /* SIZES UPDATE */
    public function update(Request $request, $id)
    {
        //
    }

    /* SIZES DELETE */
    public function destroy($id)
    {
        //
    }
}
