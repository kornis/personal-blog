<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function index()
    {
    	$tags = Tag::orderBy('id','ASC')->paginate(5);
    	return view('admin.tags.index')->with('tags',$tags);
    }

    public function create()
    {
    	return view('admin.tags.create');
    }

    public function store(Request $request)
    {
    	$tag = new Tag($request->all());
    	$tag->save();
    	$success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Tag creado con éxito!</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
			      </div>';
    	return redirect()->route('tags.index')->with('success',$success);
    }

    public function edit($id)
    {
    	$tag = Tag::find($id);
    	return view('admin.tags.edit')->with('tag',$tag);
    }

    public function destroy($id)
    {
    	$tag = Tag::find($id);
    	$tag->delete();
    	$success = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Tag eliminado con éxito!</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
			      </div>';
		return redirect()->route('tags.index')->with('success',$success);

    }

    public function update(Request $request,$id)
    {
    	$tag = Tag::find($id);
    	$tag->name = $request->name;
    	$tag->save();
    	$success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Tag editado con éxito!</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
			      </div>';

    	return redirect()->route('tags.index')->with('success',$success);
    }


}

