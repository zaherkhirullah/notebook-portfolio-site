<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Notebook, protfolio, website"/>
    <meta name="description" content="Notebook protfolio website"/>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>{{ config('app.name', 'Zaher Khirullah') }}</title>

    <!-- Styles -->
    <link href="{{ asset_v('assets/css/coda-slider.css') }}" rel="stylesheet">
    <link href="{{ asset_v('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
<?php
$site_link = "https://zaherr.com";
?>
<div id="slider">
    <div id="tooplate_wrapper">
        <div id="tooplate_sidebar">

            <div id="header">
                <h1 class="title-h2">
                    <a href="{{$site_link}}" style="color:#000;">
                        ZAHER KHIRULLAH
                    </a>
                </h1>
            </div>

            <div id="Auth">

            </div>

            <div id="menu">

                <ul class="navigation">

                    <li>
                        <a href="{{ route('home') }}" class="selected menu-1">
                            <i class="glyphicon glyphicon-home"></i> HOME
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('works') }}" class="menu-3">
                            <i class="glyphicon glyphicon-briefcase"></i> Works
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}" class="menu-4">
                            <i class="glyphicon glyphicon-picture"></i> Gallery
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}" class="menu-1">
                            <i class="glyphicon glyphicon-th"></i> Projects
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('education') }}" class="menu-3">
                            <i class="glyphicon glyphicon-education"></i> Education
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('languages') }}" class="menu-4">
                            <i class="glyphicon glyphicon-globe"></i> Languages
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="menu-2">
                            <i class="glyphicon glyphicon-equalizer"></i> About Me
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="menu-5">
                            <i class="glyphicon glyphicon-earphone"></i> Contact
                        </a>
                    </li>

                </ul>
            </div>
        </div> <!-- end of sidebar -->

        <div id="content">
            <div class="scroll">
                <div class="scrollContainer">
                    @yield('content')
                    <div class="col_380 float_r"></div>
                </div>
            </div>
        </div><!-- end of scroll -->
    </div>
</div> <!-- end of content -->
<div id="footer">

    Copyright <i class="glyphicon glyphicon-copyright-mark"> </i> 2017 - {{\Carbon\Carbon::now()->year}}
    &nbsp;
    <i class="glyphicon glyphicon-registration-mark"> </i>
    <a href="{{$site_link}}">Zaher Khirullah</a><br/>

    <div class="cleaner"></div>
    <br/>
</div>


<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="{{asset_v('js/app.js') }}"></script>

</body>
</html>


