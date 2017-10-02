<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /* CATEGORIES INDEX */
    public function index()
    {
        $categories = Category::orderBy('id')->get();
        return view('categories.index', compact('categories'));
    }

    /* CATEGORIES CREATE */
    public function create()
    {
        return view('categories.create', compact('category'));
    }

    /* CATEGORIES STORE */
    public function store(Request $request)
    {
        //
    }

    /* CATEGORIES SHOW */
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    /* CATEGORIES EDIT */
    public function edit()
    {
        //
    }

    /* CATEGORIES UPDATE */
    public function update(Request $request, $id)
    {
        //
    }

    /* CATEGORIES DELETE */
    public function destroy($id)
    {
        //
    }
}
