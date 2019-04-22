<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;




class ArticlesController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::Search($request->title)->paginate(5);
        $articles->each(function($articles){
            $articles->category;
            $articles->user;
        });
    	return view('articles.index')->with('articles',$articles);
    }

    public function create()
    {
    	$categories = Category::orderBy('name','ASC')->get();
    	$tags = Tag::orderBy('name','ASC')->get();
    	return view('articles.create')->with('categories',$categories)->with('tags',$tags);
    }

    public function store(Request $request)
    {
    	
    	if($request->file('images'))
    	{
    	$file = $request->file('images');
    	$name = "articleImage_".time().'.'.$file->getClientOriginalExtension();
		$path = public_path().'/images/articles/';
		$file->move($path,$name);
		$image = new Image();
    	$image->name = $name;
    	$image->article()->associate($article);
    	$image->save();
    	}

    	$category_id = $request->category_id;

    	$article = new Article($request->all());
    	$article->user_id = \Auth::user()->id;
    	$article->category_id = $category_id;
    	$article->save();

    	$article->tags()->sync($request->tags);

    	$success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>El artículo "'.$article->title.'" se ha creado con éxito!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';
    	return redirect()->route('articles.index')->with('success',$success);
    }

    public function edit($id)
    {
        $articles = Article::find($id);
        $articles->category;
        $categories = Category::orderBy('name','DESC')->get();
        $tags = Tag::orderBy('name','DESC')->get();     
        return view('articles.edit')->with('articles',$articles)->with('categories',$categories)->with('tags',$tags);
    }

    public function update(Request $request)
    {

    }

}
