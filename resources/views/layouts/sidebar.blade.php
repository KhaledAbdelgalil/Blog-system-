 <div class="col-sm-3 col-sm-offset-1 blog-sidebar" style="position: relative;
  float: right;
  font-family: verdana;
 
  padding-left: 10p">
          <div class="sidebar-module sidebar-module-inset" style="border: 2px solid #003B62;background-color: #ed2339;">
            <h4 style="color: black;">About</h4>
            <p>INTCORE <em>INTERNSHIP</em> This a simple blog related to <br>INTCORE INTRERNSHIP</p>
          </div>
          <div class="sidebar-module" style="border: 2px solid #003B62; background-color:#ed2339;">
            <h4 style="color: black;">Archives</h4>
            <ol class="list-unstyled">

              @foreach($Archives as $archive)
              <li>
                <a style="color: white;" href="/?month={{ $archive['month'] }}&year={{ $archive['year'] }}">{{ $archive['month'].' '.$archive['year']
                }}</a>
              </li>
              @endforeach 
            </ol>
          </div>

<div class="sidebar-module" style="border: 2px solid #003B62;background-color: #ed2339;">
            <h4 style="color:black;">Tags</h4>
            <ol class="list-unstyled">

              @foreach($tags as $tag)
              <li>
                <a style="color:white;" href="/posts/tags/{{$tag}}">{{ $tag
                }}</a>
              </li>
              @endforeach 
            </ol>
          </div>

          <!--<div class="sidebar-module" style="border: 2px solid #003B62; background-color: #ed2339;">
            <h4 style="color:black;">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div>--><!-- /.blog-sidebar -->
