<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    /* USER ROLES INDEX */
    public function index()
    {
        return view('user-roles.index');
    }

    /* USER ROLES CREATE */
    public function create()
    {
        return view('user-roles.create');
    }

    /* USER ROLES STORE */
    public function store(Request $request)
    {
        //
    }

    /* USER ROLES SHOW */
    public function show($id)
    {
        return view('user-roles.show');
    }

    /* USER ROLES EDIT */
    public function edit($id)
    {
        return view('user-roles.edit');
    }

    /* USER ROLES UPDATE */
    public function update(Request $request, $id)
    {
        //
    }

    /* USER ROLES DELETE */
    public function destroy($id)
    {
        //
    }
}
