            

 <div class="blog-post">
 	<h2 class="blog-post-title" style="color: blue;">
      <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
      </a>
      </h2>
            <p class="blog-post-meta">
				<strong>{{ $post->user->name }} </strong>on

            	{{ $post->created_at->toFormattedDateString() }}
            </p>

            {{ $post->body }}
  </div><!-- /.blog-post -->
        