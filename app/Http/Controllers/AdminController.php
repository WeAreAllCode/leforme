<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /* ORDERS INDEX */
    public function index()
    {
        return view('admin.index');
    }
}
