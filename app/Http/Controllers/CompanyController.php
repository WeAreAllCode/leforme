<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /* COMPANIES INDEX */
    public function index()
    {
        return view('companies.index');
    }

    /* COMPANIES CREATE */
    public function create()
    {
        return view('companies.create');
    }

    /* COMPANIES STORE */
    public function store(Request $request)
    {
        //
    }

    /* COMPANIES SHOW */
    public function show($id)
    {
        return view('companies.show');
    }

    /* COMPANIES EDIT */
    public function edit($id)
    {
        return view('companies.edit');
    }

    /* COMPANIES UPDATE */
    public function update(Request $request, $id)
    {
        //
    }

    /* COMPANIES DELETE */
    public function destroy($id)
    {
        //
    }
}
