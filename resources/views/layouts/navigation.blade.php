<header role="banner">
    <ul class="social-media-list">
        <li><em></em></li>
        <li><a href="https://www.youtube.com/channel/UC1H_E6P5rtIWCuAh07mJ_4w" target="_blank"><img src="{{ url('images/social-youtube.png') }}" title="Youtube" alt="youtube"></a></li>
        <li><a href="https://www.instagram.com/ironhillstraining/" target="_blank"><img src="{{ url('images/social-instagram.png') }}" title="Instagram" alt="instagram"></a></li>
    </ul>
    <div>
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
                        <li class="{{ Request::is('/') ? "active" : ""}}"><a href="{{ route('home') }}">HOME</a></li>
                        <li class="{{ Request::is('coaches') ? "active" : ""}}"><a href="{{ route('coaches') }}">THE COACHES</a></li>
                        <li id="hide-logo"><a href="{{ route('home') }}"><img id="logo-navbar-middle" src="{{ url('images/ironhills_logo.png') }}" width="200" alt="Main Logo"></a></li>
                        <li><a href="{{ url('/blog') }}">BLOG</a></li>
                        <li class="{{ Request::is('gym') ? "active" : ""}}"><a href="{{ route('gym') }}">GYM</a></li>
                        <li class="{{ Request::is('contact') ? "active" : ""}}"><a href="{{ route('contact') }}">CONTACT</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</header><!-- header role="banner" -->
