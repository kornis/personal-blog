<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ImagesController extends Controller
{
    public function index()
    {

    	$articles = Article::orderBy('id','DESC')->paginate(6);
    	$articles->each(function($articles){
    		$articles->category;
    		$articles->image;
    	});
    	return view('admin.images.index')->with('articles',$articles);
    }
}
