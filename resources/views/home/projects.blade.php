@extends('layouts.app')

@section('content')
    <div class="panel" id="projects">
        <div class="content_section">
            <h1>My Projects</h1>
            <ul class="projectList list-unstyled ">
                <li>
                    <a href="#"><img src="{{asset("assets/images/gallery/image_01.jpg")}}" alt="Project 1"/></a>
                    <div class="content_poject">Project 1</div>
                </li>
                <li>
                    <a href="#"><img src="{{asset("assets/images/gallery/image_02.jpg")}}" alt="Project 2"/></a>
                    <div class="content_poject">Project 2</div>
                </li>
                <li>
                    <a href="#"><img src="{{asset("assets/images/gallery/image_03.jpg")}}" alt="Project 3"/></a>
                    <div class="content_poject">Project 3</div>
                </li>
                <li>
                    <a href="#"><img src="{{asset("assets/images/gallery/image_04.jpg")}}" alt="Project 4"/></a>
                    <div class="content_poject">Project 4</div>
                </li>
                <li>
                    <a href="#"><img src="{{asset("assets/images/gallery/image_05.jpg")}}" alt="Project 5"/></a>
                    <div class="content_poject">Project 5</div>
                </li>
                <li>
                    <a href="#"><img src="{{asset("assets/images/gallery/image_06.jpg")}}" alt="Project 6"/></a>
                    <div class="content_poject">Project 6</div>
                </li>
                <li>
                    <a href="#"><img src="{{asset("assets/images/gallery/image_05.jpg")}}" alt="Project 7"/></a>
                    <div class="content_poject">Project 7</div>
                </li>
                <li>
                    <a href="#"><img src="{{asset("assets/images/gallery/image_06.jpg")}}" alt="Project 6"/></a>
                    <div class="content_poject">content_poject</div>
                </li>
            </ul>
            <div class="cleaner"></div>
        </div>
    </div> <!-- end of projects -->
@endsection