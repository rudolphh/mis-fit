

{{-- <style type="text/css">
    body { padding-top: 70px; }

</style>
 --}}


<nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand logo" href="{{ url('/') }}">
                    {{ config('app.styled_name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul id="left-nav" class="nav navbar-nav" style="display: inline-flex; float: left;">
                    
                    <li><a href="{{ url('/home') }}">
                        <i class="fa fa-btn fa-home fa-2x"></i>Home</a>
                    </li>

                    <li><a href="{{ url('/measurements') }}">
                        <span>
                        <svg class="measure" src="{{ include( public_path() . '/images/measure.svg') }}" ></svg>
                        </span>
                        Measures</a>
                    </li>

                </ul>



                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right" 
                    style=" float: right;" >
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">
                        <i class="fa fa-btn fa-sign-in fa-2x"></i>Login</a></li>
                        <li><a href="{{ url('/register') }}">
                        <i class="fa fa-btn fa-user-plus fa-2x"></i>Register</a></li>
                    @else
                        <li class="dropdown" {{-- style="display: inline-flex;" --}}>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li data-toggle="collapse" data-target=".nav-collapse">
                                    <a href="{{ url('/settings') }}">
                                    <i class="fa fa-btn fa-cog fa-2x"></i>
                                    Settings</a>
                                </li>
                             
                                <li data-toggle="collapse" data-target=".nav-collapse">
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fa fa-btn fa-sign-out fa-2x"></i>
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

