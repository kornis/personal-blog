<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
use App\Category;

class FrontController extends Controller
{
    public function index()
    {
    	$articles = Article::orderBy('id','DESC')->paginate(6);
    	$articles->each(function($articles){
    		$articles->image;
    		$articles->category;
		
    	});
    	$tags = Tag::orderBy('name','DESC')->get(); 
    	$categories = Category::orderBy('name','DESC')->get();
    	
    	return view('front.main.index')->with('articles',$articles)->with('tags',$tags)->with('categories',$categories);
    }
}
