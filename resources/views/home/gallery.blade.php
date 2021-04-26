@extends('layouts.Layout')

@section('content')
    <div class="panel" id="gallery">
        <h1>My Gallery</h1>
        <ul id="gallery_container " class="list-unstyled ">

            <li class="gallery_box ">
                <a href="#">
                    <img src="Styles/images/gallery/image_04.jpg" alt="Project 4"/>
                </a>
            </li>
            <li class="gallery_box ">
                <a href="#">
                    <img src="Styles/images/gallery/image_05.jpg" alt="Project 5"/>
                </a>
            </li>
            <li class="gallery_box ">
                <a href="#">
                    <img src="Styles/images/gallery/image_06.jpg" alt="Project 6"/>
                </a>
            </li>
            <li class="gallery_box">
                <a href="#">
                    <img src="Styles/images/gallery/image_01.jpg" alt="Project 1"/>
                </a>
            </li>
            <li class="gallery_box ">
                <a href="#">
                    <img src="Styles/images/gallery/image_02.jpg" alt="Project 2"/>
                </a>
            </li>
            <li class="gallery_box ">
                <a href="#">
                    <img src="Styles/images/gallery/image_03.jpg" alt="Project 3"/>
                </a>
            </li>
        </ul>

        <div class="cleaner"></div>

    </div> <!-- end of services -->

@endsection
