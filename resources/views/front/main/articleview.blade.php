@extends('front.main.frontmain')

@section('title','Articulo')



@section('section-name')
<div style="padding: 15px 0 0 15px;">
{{ $article->title }}
</div>
@endsection
@section('article-img')
@forelse($article->image as $img)
<div style="width: 22rem; padding: 10px;">
<img class="card-img-top" src="{{asset('/images/articles/'.$img->name)}}" alt="Card image cap">
</div>
@empty

@endforelse
@endsection
@section('content')


{!! $article->content !!}


@endsection
<!-- <hr style="margin: 5px 0 1px 0 !important;"> -->

@section('content-tags')
<div class="col-md-2">
	</div>
<div class="card col-md-7" style="margin-top: 0 !important;">
	<div class="row">
	<div class="card-header" style="padding: 5px !important;">
		<span class="badge">TAGS:</span>
@foreach($article->tags as $tag)
 <span class="badge badge-primary">{{ $tag->name }}</span>

@endforeach
</div>
</div>
</div>

@endsection
@section('aside')
@include('front.main.partials.aside')
@endsection

<!-- @ include('front.main.partials.aside') -->



