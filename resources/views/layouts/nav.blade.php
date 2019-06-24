<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
            
      <img src="/img/intcore.png" width="100px" height="50px">
      
          @if(Auth::check())
          <a class="blog-nav-item active" href="/posts/create">Publish a post</a>
          @endif
          @if(Auth::check())
          <a class="blog-nav-item" style="float:right" href="/logout">logout</a>
          <a class="blog-nav-item" style="float:right" href="#">{{Auth::user()->name}}</a>
          @endif
            @if(!Auth::check())
          <a class="blog-nav-item" style="float:right" href="/login">Login</a>
          <a class="blog-nav-item" style="float:right" href="/register">Sign UP</a>
          @endif
        </nav>
      </div>
    </div>