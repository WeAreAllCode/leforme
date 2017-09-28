<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class PurpleController extends Controller
{
    /* PURPLE'S FORM INDEX */
    public function index()
    {
        return view('purple.index');
    }

    /* PURPLE'S JUICES FORM */
    public function juices()
    {
        return view('purple.juices');
    }

    /* PURPLE'S PRODUCTS FORM */
    public function products()
    {
        return view('purple.products');
    }

    /* PURPLE'S SUPPLIES FORM */
    public function supplies()
    {
        return view('purple.supplies');
    }
}
