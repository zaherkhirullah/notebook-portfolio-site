@extends('layouts.app')

@section('content')
    <div class="content-section">
        <h1>My Projects</h1>
        <div class="projectList">
            @foreach(range(1,6) as $projectId)
                <div class="project-item">
                    <a href="#"><img src="{{asset("assets/images/gallery/image_0{$projectId}.jpg")}}" alt="Project {{$projectId}}"/></a>
                    <div class="content-project my-2">
                        <h3>Project {{{$projectId}}}</h3>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of projects -->
@endsection