<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
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
                        <a href="{{ route('home') }}" class="selected menu_01">
                            <i class="glyphicon glyphicon-home"></i> HOME
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('works') }}" class="menu_03">
                            <i class="glyphicon glyphicon-briefcase"></i> Works
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}" class="menu_04">
                            <i class="glyphicon glyphicon-picture"></i> Gallery
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}" class="menu_01">
                            <i class="glyphicon glyphicon-th"></i> Projects
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('education') }}" class="menu_03">
                            <i class="glyphicon glyphicon-education"></i> Education
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('languages') }}" class="menu_04">
                            <i class="glyphicon glyphicon-globe"></i> Languages
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="menu_02">
                            <i class="glyphicon glyphicon-equalizer"></i> About Me
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="menu_05">
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

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<!-- Scripts -->
<script src="{{asset_v("assets/js/coda-slider.js")}}"></script>
<script src="{{asset_v("assets/js/jquery-1.2.6.js")}}"></script>
<script src="{{asset_v("assets/js/jquery.scrollTo-1.3.3.js")}}"></script>
<script src="{{asset_v("assets/js/jquery.localscroll-1.2.5.js")}}"></script>
<script src="{{asset_v("assets/js/jquery.serialScroll-1.2.1.js")}}"></script>
<script src="{{asset_v("assets/js/jquery.easing.1.3.js")}}"></script>
<script src="{{asset_v('js/app.js') }}"></script>

</body>
</html>


