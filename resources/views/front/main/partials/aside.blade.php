		
		<div class="col-sm-2">
			<div class="row">
			<!-- modulo categorías -->
			<div class="card" style="width: 19em;">
				<div class="card-header">
				<strong>Categorías</strong>
			</div>
				<ul class="list-group">
					@foreach($categories as $category)
					<a href="{{ route("front.articlesbycategories",$category->id) }}"><li class="list-group-item">
					{{ $category->name }}
					<span class="badge badge-primary text-right boxed">
					{{ $category->articles->count() }}
				</span>
			</li></a>
					@endforeach
				</ul>
				</div>
				<!-- fin modulo categorías -->
			    <!-- modulo tags -->
			<div class="card" style="width: 19em;">
				<div class="card-header">
				<strong>TAGS</strong>
			</div>
				<div class="card-body">
					@foreach($tags as $tag)
					<span class="badge badge-primary">
					{{ $tag->name }}
				</span>
					@endforeach
				</div>
			</div>
			<!-- fin modulo tags -->

			</div>
		</div>
		
		


	