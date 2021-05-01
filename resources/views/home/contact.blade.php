@extends('layouts.app')

@section('content')

    <h1>Contact Information</h1>
    <p>Do you have any question? Do you need to help? please keep touch with me.</p>
    <div class="cleaner-h10"></div>

    <div class="col_380 float_l">
        <div id="contact_form">
            <form method="post" name="contact" action="#">

                <div class="form-body">
                    <input type="text" maxlength="40" id="author" class="input-field" name="author" placeholder="NAME *" required/>
                    <input type="text" maxlength="40" id="email" class="input-field" name="email" placeholder="Email *" required>
                    <input type="text" maxlength="40" id="subject" class="input-field" name="subject" placeholder="Subject *" required/>
                    <textarea id="text" name="text" rows="0" cols="0" placeholder="Message *" required class="required"></textarea>
                </div>

                <div class="my-1">
                    {{--                  <input type="reset" value="Reset" id="reset" name="reset" class="px-2"/>--}}
                    <button class="btn btn-primary py-1 px-4">
                        Send
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div id="social_box" class="social-box">
        <a href="https://facebook.com/zaherkhirullah">
            <img src="{{asset("assets/images/icons/facebook.png")}}" alt="zaher khirullah facebook profile"/>
        </a>
        <a href="https://instagram.com/zaherkhirullah">
            <img src="{{asset("assets/images/icons/instagram.png")}}" alt="zaher khirullah instagram profile"/>
        </a>
        <a href="https://linkedin.com/in/zaherkhirullah">
            <img src="{{asset("assets/images/icons/linkedin.png")}}" alt="zaher khirullah linkedin profile"/>
        </a>
        <a href="https://twitter.com/zaherkhirullah">
            <img src="{{asset("assets/images/icons/twitter.png")}}" alt="zaher khirullah twitter profile"/>
        </a>
        <a href="https://github.com/zaherkhirullah">
            <img src="{{asset("assets/images/icons/github.png")}}" alt="zaher khirullah github profile"/>
        </a>
        <a href="https://bitbucket.com/zaherkhirullah">
            <img src="{{asset("assets/images/icons/bitbucket.png")}}" alt="zaher khirullah bitbucket profile"/></a>
        {{--        <a href="https://youtube.com/zaherkhirullah"><img src="{{asset("assets/images/youtube.png")}}" alt="zaher khirullah youtube profile"/></a>--}}
    </div>

@endsection
