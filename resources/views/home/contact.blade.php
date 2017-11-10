@extends('layouts.Layout')

@section('content')

                <h1>Contact Information</h1>
                <p>Duis vel est eu velit eleifend volutpat non et purus. Pellentesque tellus nulla, suscipit et fringilla vitae, sodales ultricies dolor.</p>
                <div class="cleaner_h10"></div>
                
                <div class="col_380 float_l">
                  <div id="contact_form">
                    <form method="post" name="contact" action="#">
                      <input type="text" maxlength="40" id="author" class="input_field" name="author"  placeholder="NAME *" required/>
                      <div class="cleaner_h10" ></div>
                      <input type="text" maxlength="40" id="email" class="input_field" name="email"  placeholder="Email *" required>
                      <div class="cleaner_h10"></div>
                      <input type="text" maxlength="40" id="subject" class="input_field" name="subject" placeholder="Subject *" required/>
                      <div class="cleaner_h10"></div>
                      <textarea id="text" name="text" rows="0" cols="0" placeholder="Message *" required class="required"></textarea>
                      <div class="cleaner_h10"></div>
                      <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                      <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                    </form>
                  </div>
                </div>
                <div id="social_box">
                 <a href="#"><img src="Styles/images/facebook.png" alt="facebook" /></a>
               <a href="#"><img src="Styles/images/flickr.png" alt="flickr" /></a>
               <a href="#"><img src="Styles/images/myspace.png" alt="myspace" /></a>
               <a href="#"><img src="Styles/images/twitter.png" alt="twitter" /></a>
               <a href="#"><img src="Styles/images/youtube.png" alt="youtube" /></a>
                   </div>
    
@endsection
