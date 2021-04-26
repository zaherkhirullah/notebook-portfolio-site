<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'ZaherKhirullah') }}
                </a>
            </div>
            localhost

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>
                <div id="Auth">
                <!--   @guest
                    <div class="inline-block">
                      <a href="{{ route('register') }}" class="menu_01">
           <i class="glyphicon glyphicon-pencil"></i> Register 
         </a>
         <a href="{{ route('login') }}" class="menu_02">
           <i class="glyphicon glyphicon-log-in"></i> Login 
         </a>
       </div >       
    @else
                    <div class="inline-block">
                       <a href="#" class="dropdown-toggle menu_02" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                         <i class="glyphicon glyphicon-user"></i> {{ Auth::user()->name }}
                            </a>
                             <a href="{{ route('logout') }}" class="menu_05" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="glyphicon glyphicon-log-out"></i> 
          </a>
      </div>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
                            </form>
@endguest -->
                </div>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li><a href="{{ route('about') }}">about</a></li>
                        <li><a href="{{ route('contact') }}">contact</a></li>
                        <li><a href="{{ route('about') }}">about</a></li>
                        <li><a href="{{ route('contact') }}">contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
