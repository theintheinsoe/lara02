
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="{{route('home')}}">My site</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item {{Request::segment(1)=='' ? 'bg-danger':''}}">
        <a class="nav-link" href="{{route('home')}}">Home </a>
      </li>
      <li class="nav-item {{Request::segment(1)=='blog' ? 'bg-danger':''}}">
        <a class="nav-link" href="{{route('blog')}}">Blog</a>
      </li>
      <li class="nav-item {{Request::segment(1)=='contact' ? 'bg-danger':''}}">
        <a class="nav-link" href="{{route('contact')}}">Contact</a>
      </li>
      
    </ul>
  </div>
</nav>
<h1>{{Request::segment(1)}}</h1>
