<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class LabController extends Controller
{
    /* LAB'S FORM INDEX */
    public function index()
    {
        return view('lab.index');
    }

    /* LAB'S FLAVORS FORM */
    public function flavors()
    {
        return view('lab.flavors');
    }

    /* LAB'S LABELS FORM */
    public function labels()
    {
        return view('lab.labels');
    }

    /* LAB'S SUPPLIES FORM */
    public function supplies()
    {
        return view('lab.supplies');
    }
}
