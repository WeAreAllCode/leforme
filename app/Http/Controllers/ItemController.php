<?php

namespace App\Http\Controllers;

use App\Item;
use App\Category;
use App\Company;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /* ITEMS INDEX */
    public function index()
    {
        $items = Item::orderBy('id')->get();
        return view('items.index', compact('items'));
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
        //
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
