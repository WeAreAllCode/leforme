<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /* ORDERS INDEX */
    public function index()
    {
        return view('orders.index');
    }

    /* ORDERS CREATE */
    public function create()
    {
        return view('orders.create');
    }

    /* ORDERS STORE */
    public function store(Request $request)
    {
        //
    }

    /* ORDERS SHOW */
    public function show($id)
    {
        return view('orders.show');
    }

    /* ORDERS EDIT */
    public function edit($id)
    {
        //
    }

    /* ORDERS UPDATE */
    public function update(Request $request, $id)
    {
        //
    }

    /* ORDERS DELETE */
    public function destroy($id)
    {
        //
    }
}
