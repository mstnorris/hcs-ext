<!-- Fixed navbar -->
    <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">

  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Hawksmoor</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        {{--<li><a class="active" href="/news">News <span class="label label-danger">3</span></a><span class="sr-only">(current)</span></li>--}}
        <li><a href="/vision">Vision</a></li>
        <li><a href="/services">Services</a></li>
        <li><a href="/policies">Policies</a></li>
        {{--<li class="dropdown">--}}
          {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Policies <span class="caret"></span></a>--}}
          {{--<ul class="dropdown-menu" role="menu">--}}
            {{--<li><a href="#">Action</a></li>--}}
            {{--<li><a href="#">Another action</a></li>--}}
            {{--<li><a href="#">Something else here</a></li>--}}
            {{--<li class="divider"></li>--}}
            {{--<li><a href="#">Separated link</a></li>--}}
            {{--<li class="divider"></li>--}}
            {{--<li><a href="#">One more separated link</a></li>--}}
          {{--</ul>--}}
        {{--</li>--}}
      </ul>
      {{--<div class="col-md-2">--}}
      {{--<form class="navbar-form navbar-left" role="search">--}}
        {{--<div class="form-group">--}}
          {{--<input type="text" class="form-control" placeholder="Search">--}}
        {{--</div>--}}
        {{--<!-- <button type="submit" class="btn btn-link">Submit</button> -->--}}
      {{--</form>--}}
      {{--</div>--}}
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        {{--@if (Auth::check())--}}
            {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                    {{--<img src="https://www.gravatar.com/avatar/{{{ md5(strtolower(Auth::user()->email)) }}}?s=24" height="24" width="24" class="navbar-avatar">--}}
                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu" role="menu">--}}
                            {{--<li><a href="#">Settings</a></li>--}}
                            {{--<li><a href="#">Action</a></li>--}}
                            {{--<li><a href="#">Another action</a></li>--}}
                            {{--<li><a href="#">Something else here</a></li>--}}
                            {{--<li class="divider"></li>--}}
                            {{--<li><a href="/auth/logout">Sign out</a></li>--}}
                          {{--</ul>--}}
            {{--</li>--}}
        {{--@else--}}
            {{--<li><a href="/auth/login">Sign in</a></li>--}}
        {{--@endif--}}
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>