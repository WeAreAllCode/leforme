<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /* COMPANIES INDEX */
    public function index()
    {
        $companies = Company::orderBy('id')->get();
        return view('companies.index', compact('companies'));
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
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    /* COMPANIES EDIT */
    public function edit($id)
    {
        //
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
