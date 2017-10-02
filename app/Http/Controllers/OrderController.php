<?php

namespace App\Http\Controllers;

use App\Order;
use App\Item;
use App\Category;
use App\Size;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /* ORDERS INDEX */
    public function index()
    {
        $orders = Order::orderBy('created_on')->get();
        return view('orders.index', compact('orders'));
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
