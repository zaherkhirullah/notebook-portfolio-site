@extends('layouts.app')

@section('content')
    <h1>My Gallery</h1>
    <div id="gallery-container" class="gallery">
        <a href="#">
            <img class="gallery-img" src="{{asset_v("/assets/images/gallery/image_04.jpg")}}" alt="Project 4"/>
        </a>
        <a href="#">
            <img class="gallery-img" src="{{asset_v("/assets/images/gallery/image_05.jpg")}}" alt="Project 5"/>
        </a>
        <a href="#">
            <img class="gallery-img" src="{{asset_v("/assets/images/gallery/image_06.jpg")}}" alt="Project 6"/>
        </a>
        <a href="#">
            <img class="gallery-img" src="{{asset_v("/assets/images/gallery/image_01.jpg")}}" alt="Project 1"/>
        </a>
        <a href="#">
            <img class="gallery-img" src="{{asset_v("/assets/images/gallery/image_02.jpg")}}" alt="Project 2"/>
        </a>
        <a href="#">
            <img class="gallery-img" src="{{asset_v("/assets/images/gallery/image_03.jpg")}}" alt="Project 3"/>
        </a>
    </div>

    <div class="cleaner"></div>
    <!-- end of services -->

@endsection
