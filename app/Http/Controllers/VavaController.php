<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class VavaController extends Controller
{
    /* VAVA'S FORM INDEX */
    public function index()
    {
        return view('vava.index');
    }

    /* VAVA'S JUICES FORM */
    public function juices()
    {
        return view('vava.juices');
    }

    /* VAVA'S PRODUCTS FORM */
    public function products()
    {
        return view('vava.products');
    }

    /* VAVA'S SUPPLIES FORM */
    public function supplies()
    {
        return view('vava.supplies');
    }
}
