@extends ('layouts.master')



@section('content')

	<div class="col-md-8 blog-main">

		<h1>{{ $post->title }}</h1>
		@if(count($post->tags))
			<ul>
				@foreach($post->tags as $tag)
				<li>
					<a href="/posts/tags/{{ $tag->name }}">
						{{ $tag->name }}
					</a>
				</li>
				@endforeach
			</ul>
		@endif

		{{ $post->body }}
		<hr>
		<div class="comments">
			<ul class="list-group">
			@foreach($post->comments as $comment)
			<li class="list-group-item">
			<strong>
				{{$comment->created_at->diffForHumans()}}; &nbsp;
			</strong>
				{{ $comment->body
				}}
			
			</li>
			@endforeach
			</ul>
		</div>
	<hr>
<div class="card">
			<div class="card-block">
				@if(Auth::check())

				<form method="POST" action="/posts/{{$post->id}}/comments">
					
					{{ csrf_field() }}
					<div class="form-group">
						<textarea
						name="body" placeholder="your comment here" class="form-control" required></textarea>
					</div>
					<div class="form-group">
 						 <button type="submit" class="btn btn-primary">Add comment</button>
					</div>

				</form>
				@include('layouts.errors')
				@endif
			</div>
		</div>
</div>
@endsection