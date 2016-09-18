<span id="contact"></span>

<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 widget widget_about"> <img src="{{URL::asset('images/vera_logo2.png')}}" alt="" class="img-responsive footer_logo"/>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
        <div class="clearfix"></div>

      </div>
      <!-- col 4 -->
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-6 widget">
            <h4>Contact Details</h4>
            <ul class="address_list">
              <li><i class="fa fa-phone"></i>Phone: 02-799-8845</li>
              <li><i class="fa fa-android"></i>+63-917-529-9796<br/>+63-919-889-8155</li>
              <li><i class="fa fa-envelope"></i>vera@yourdomain.com</li>
              <li><i class="fa fa-map-marker"></i>Unit 1C Emiritz Bldg. Rose of Heaven Drive <br/>
          Talon Village 4 Laspiñas City</li>
            </ul>
          </div>
          <!-- col 6 -->
          <div class="col-sm-6 widget">
            <h4>Paper Works</h4>
            <ul class="attorneys_list">
              <li><a style="color:#a0a0a0" href="#home">Home</a></li>
              <li><a style="color:#a0a0a0" href="#our_firm">About Us</a></li>
              <li><a style="color:#a0a0a0" href="#practices">Services</a></li>
              <li><a style="color:#a0a0a0" href="#crime_cases">Client(s)</a></li>
              <li><a style="color:#a0a0a0" href="#reviews">News</a></li>
              <li><a style="color:#a0a0a0" href="#reviews">Blog</a></li>
              <li><a style="color:#a0a0a0" href="#contact">Contact Us</a></li>
              @if(Auth::check())
                <li><a style="color:#a0a0a0" href="{{url('/logout')}}">Logout</a></li>
              @else
                <li><a style="color:#a0a0a0" href="{{url('/login')}}">Login</a></li>
              @endif
            </ul>
          </div>
          <!-- col 6 --> 
        </div>
        <!-- row -->
        <div class="row">

        </div>
      </div>
      <!-- col 8 --> 
    </div>
    <!-- row --> 
  </div>
  <!-- container --> 
</div>
<!-- footer -->
<div class="copyright" >
  <div class="container">
    <div class="row">
      <div class="col-sm-6"> Copyright 2016 - Vera & Associates Bookkeeping Services Inc. All Rights Reserved. </div>
    </div>
    <!-- row --> 
  </div>
  <!-- container --> 
</div>
<!-- copyright --> 