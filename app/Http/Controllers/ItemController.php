<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    /* ITEMS INDEX */
    public function index()
    {
        return view('items.index');
    }

    /* ITEMS CREATE */
    public function create()
    {
        return view('items.create');
    }

    /* ITEMS STORE */
    public function store(Request $request)
    {
        //
    }

    /* ITEMS SHOW */
    public function show($id)
    {
        return view('items.show');
    }

    /* ITEMS EDIT */
    public function edit($id)
    {
        return view('items.edit');
    }

    /* ITEMS UPDATE */
    public function update(Request $request, $id)
    {
        //
    }

    /* ITEMS DELETE */
    public function destroy($id)
    {
        //
    }
}
