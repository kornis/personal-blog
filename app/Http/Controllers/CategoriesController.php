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
        $success='<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Categoría creada con éxito!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';
    	return redirect()->route('categories.index')->with('success',$success);
    }

    public function create()
    {
        
    	return view('admin.categories.create');
    }

    public function destroy($id){
        $cat = Category::find($id);
        $cat->delete();
        $success='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Categoría eliminada con éxito</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';
        return redirect()->route('categories.index')->with('success',$success);
    }

    public function edit($id)
    {
        $cat = Category::find($id);
        return view('admin.categories.edit')->with('category',$cat);
    }

    public function update(Request $request,$cat){
        $category = Category::find($cat);
        $category->name = $request->name;
        $category->save();
        $success='<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Categoría editada con éxito!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';
        return redirect()->route('categories.index')->with('success',$success);
    }
}
