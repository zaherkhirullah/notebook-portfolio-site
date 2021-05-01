@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Who is Zaher Khirullah ?</div>

            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="panel" id="home">
                    <div class="content_section">
                        <h2> I`m Zaher, Back-end web developer</h2>
                        <img src="/assets/images/tooplate_image_01.jpg" alt="Image 01" class="image_wrapper image_fl"/>
                        <p>
                            <em>

                            </em>
                        </p>
                        <p>My name is <a rel="nofollow" href="https://www.zaherr.com">Zaher Khirullah</a>, a Graduated Computer engineer living in Turkey. Also working in Imtilak Real Estate in Istanbul as a Back-end developer, Coding is my passion, my job is my hobby and always open to learning new tech stuff.
                        </p>
                    </div>

                    <div class="content_section last_section">
                        <h2>Our Services</h2>
                        <ul class="service_list">

                            <li><a href="#" class="service_one">Web Development</a></li>
                            <li><a href="#" class="service_two">Build Responsive Sites</a></li>
                            <li><a href="#" class="service_three">Mobile Applications </a></li>
                            <li><a href="#" class="service_four">Hosting services</a></li>
{{--                            <li><a href="#" class="service_five">Maecenas posuere fringilla ipsum ut pretium</a></li>--}}
                        </ul>
                    </div>
                </div> <!-- end of home -->
            </div>
        </div>
    </div>

@endsection
