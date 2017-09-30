<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /* USERS INDEX */
    public function index()
    {
        return view('users.index');
    }

    /* USERS CREATE */
    public function create()
    {
        return view('users.create');
    }

    /* USERS STORE */
    public function store(Request $request)
    {
        //
    }

    /* USERS SHOW */
    public function show($id)
    {
        return view('users.show');
    }

    /* USERS EDIT */
    public function edit($id)
    {
        //
    }

    /* USERS UPDATE */
    public function update(Request $request, $id)
    {
        //
    }

    /* USERS DELETE */
    public function destroy($id)
    {
        //
    }
}
