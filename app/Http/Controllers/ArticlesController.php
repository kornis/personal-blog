<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;


class ArticlesController extends Controller
{
    public function index()
    {
    	
    	return view('articles.index');
    }

    public function create()
    {
    	$categories = Category::all();
    	$tags = Tag::all();
    	return view('articles.create')->with('categories',$categories)->with('tags',$tags);
    }

    public function store(Request $request)
    {
    	$file = $request->file('images');
    	$name = "articleImage_".time().'.'.$file->getClientOriginalExtension();
		$path = public_path().'/images/articles/';
		$file->move($path,$name);
    	return redirect()->route('articles.index');
    }
}
