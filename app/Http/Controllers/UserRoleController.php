<?php

namespace App\Http\Controllers;

use App\UserRole;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    /* USER ROLES INDEX */
    public function index()
    {
        $userRoles = UserRole::orderBy('id')->get();
        return view('user-roles.index', compact('userRoles'));
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
    public function show(UserRole $userRole)
    {
        return view('user-roles.show', compact('userRole'));
    }

    /* USER ROLES EDIT */
    public function edit($id)
    {
        //
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
