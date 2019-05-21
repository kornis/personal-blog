@extends("admin.template.main")

@section('title','Listado de imagenes')

@section('content')
@section('section-name')
Visor de Imagenes
@endsection
	<div class="row">
      @foreach($articles as $article)
    <div class="col-sm-4">

<div class="card" style="width: 18rem;">
	@foreach($article->image as $image)
	
  <img class="card-img-top" src="{{asset('/images/articles/'.$image->name)}}" alt="Card image cap">
  @endforeach
  <div class="card-body">
    <h5 class="card-title">{{ $article->title }}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

@endforeach
</div>

{!! $articles->render() !!}
@endsection