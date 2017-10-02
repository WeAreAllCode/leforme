<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /* USERS INDEX */
    public function index()
    {
        $users = User::orderBy('id')->get();
        return view('users.index', compact('users'));
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
    public function show(User $user)
    {
        return view('users.show', compact('user'));
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
