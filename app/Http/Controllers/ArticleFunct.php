<?php


use App\Article;
use App\tag;
use App\Category;

 class ArticleFunct
{

	public function articleLoad($id)
	{
		$article = Article::find($id);
		$article->category;
		$article->tags;
		$tags = Tag::orderBy('name','DESC')->get();
		$categories = Category::orderBy('name','DESC')->get();
		
		return view('front.articleview')->with('article',$article)->with('tags',$tags)->with('categories',$categories);
	}

}

?>