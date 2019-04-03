<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriesRequest;
use App\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
    	return view('admin.categories.index')->with('categories', $categories);
    }

    public function store(CategoriesRequest $request)
    {
    	$categories = new Category();
    	$categories->name = $request->name;
    	$categories->save();
    	return redirect()->route('categories.index');
    }

    public function create()
    {
    	return view('admin.categories.create');
    }

    public function destroy(){

    }
}
