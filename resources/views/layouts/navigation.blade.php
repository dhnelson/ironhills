<header role="banner">
  <div class="metal">
<nav id="navbar-primary" class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-primary-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar-primary-collapse">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('coaches') ? "active" : ""}}"><a href="{{ route('coaches') }}">THE COACHES</a></li>
        <li><a href="#">BLOG</a></li>
        <li id="hide-logo"><a href="{{ route('home') }}"><img id="logo-navbar-middle" src="{{ url('images/ironhills_logo.png') }}" width="200" alt="Logo Thing main logo"></a></li>
        <li class="{{ Request::is('gym') ? "active" : ""}}"><a href="{{ route('gym') }}">GYM</a></li>
        <li class="{{ Request::is('contact') ? "active" : ""}}"><a href="{{ route('contact') }}">CONTACT</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</header><!-- header role="banner" -->
<!--
<header role="banner">
    <div class="metal">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div style="margin-bottom: 10px;">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ url('images/ironhills_logo.png') }}" class="img-responsive" alt="logo" width="285px">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li class="{{ Request::is('coaches') ? "active" : ""}}"><a href="{{ route('coaches') }}">THE COACHES</a></li>
            <li><a href="#">BLOG</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="{{ Request::is('gym') ? "active" : ""}}"><a href="{{ route('gym') }}">GYM</a></li>
            <li class="{{ Request::is('contact') ? "active" : ""}}"><a href="{{ route('contact') }}">CONTACT</a></li>
          </ul>
        </div>
    </nav>
    </div>
</header>
-->
