@extends('layouts.app')

@section('content')

    <div class="col-md-12">
        <div class="card card-light">
            <div class="card-header">Who is Zaher Khirullah ?</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="content-section">
                    <h2> I`m Zaher, Back-end web developer</h2>
                    <img src="/assets/images/tooplate_image_01.jpg" alt="Image 01" class="image_wrapper image_fl"/>
                    <p>My name is <a rel="nofollow" href="https://www.zaherr.com">Zaher Khirullah</a>, a Graduated Computer engineer living in Turkey. Also working in Imtilak Real Estate in Istanbul as a Back-end developer, Coding is my passion,
                        my job is my hobby and always open to learning new tech stuff.
                    </p>
                </div>

                <div class="content-section">
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

    {{--    <div class="panel" id="aboutme">--}}
    {{--        <div class="content-section">--}}
    {{--            <h1>About Us</h1>--}}
    {{--            <img src="{{asset("assets/images/tooplate_image_02.jpg")}}" alt="Image 02" class="image_wrapper image_fl"/>--}}
    {{--            <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in lectus turpis. Vivamus cursus tortor quis leo ullamcorper auctor quis tincidunt metus.</em></p>--}}
    {{--            <p>Vestibulum vitae lectus a leo commodo egestas. Sed et ligula mauris. Donec interdum iaculis eros, sed porttitor justo ornare ac. Suspendisse ultrices arcu auctor <a href="#">sapien malesuada</a> dictum. Vivamus non ante sit amet ligula--}}
    {{--                dignissim blandit ut sit amet purus. Sed tristique euismod lectus sed scelerisque. Curabitur convallis fringilla ante, eget eleifend magna iaculis eget. Praesent at nunc tellus. Sed sed auctor odio. Maecenas ut <a href="#">mauris eu--}}
    {{--                    ligula</a> placerat tempor vel ac augue. Integer fermentum, ante eget sodales lacinia, nisl diam semper elit, non hendrerit nunc urna vitae erat. Fusce ac ante vulputate nunc cursus ullamcorper. Validate <a--}}
    {{--                        href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong> XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>--}}
    {{--        </div>--}}

    {{--        <div class="content-section">--}}
    {{--            <h2>Testimonial</h2>--}}
    {{--            <blockquote>--}}
    {{--                <p>Fusce nec felis id lacus sollicitudin vulputate. Proin tincidunt, arcu id pellentesque accumsan, neque dolor imperdiet ligula, quis viverra tellus nulla a odio. Curabitur vitae enim risus, at placerat turpis. Mauris feugiat--}}
    {{--                    suscipit tempus fringilla, felis in velit. Aliquam a leo nec massa pharetra pulvinar.</p>--}}
    {{--                <cite>Thomas - <span>Designer</span></cite></blockquote>--}}
    {{--        </div>--}}
    {{--    </div> <!-- end of aboutme -->--}}

@endsection
