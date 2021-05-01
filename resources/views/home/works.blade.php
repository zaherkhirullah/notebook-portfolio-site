@extends('layouts.app')

@section('content')
    <h1>Service Overview</h1>
    <p><em>Nam at arcu libero, ut venenatis elit. Nulla eget risus turpis, non aliquet dui. Vivamus augue felis, ultricies elementum convallis non, ornare vitae urna. Morbi et nisi eros, ut venenatis ipsum. </em></p>
    <img src="{{asset("assets/images/tooplate_image_02.jpg")}}" alt="Image" class="image_wrapper image_fr"/>
    <p>Sed eu libero quis neque laoreet cursus. Fusce elit metus, elementum nec consequat a, interdum vitae est. Aliquam sit amet odio vitae dui blandit elementum. Ut eu dolor nunc. Nam in nunc sed mi adipiscing lacinia suscipit eget tortor.
        Vivamus lacinia lectus in velit aliquet ac placerat magna euismod. In hac habitasse platea dictumst. Integer eget nibh eu libero cursus ultricies neque dolor imperdiet ligula, quis viverra tellus nulla a odio. Curabitur vitae enim risus,
        at placerat turpis. Mauris feugiat suscipit tempus fringilla, felis in velit. Phasellus quis volutpat dui.</p>

    <div class="cleaner_h20"></div>

    <ul class="service_list">
        <li><a href="#" class="service_one">Web Development</a></li>
        <li><a href="#" class="service_two">Build Responsive Sites</a></li>
        <li><a href="#" class="service_three">Mobile Applications </a></li>
        <li><a href="#" class="service_four">Hosting services</a></li>
    </ul>
    <!-- end of services -->
@endsection
