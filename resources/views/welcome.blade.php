@extends('layout.main')

@section('content')

<!-- carousel -->
@include('partials.slide_show')
<span id="our_firm"></span>

<div class="section first_section">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-sm-12 animate-in fadeInLeft" data-speed="0.7" data-show-screen="0.7">
        <div class="section_title text-left"> <span class="highlight"><span>Our Committment</span></span>
          <h2 data-head="Providing Excellent Accounting & Bookkeeping Services">Providing Excellent Accounting & Bookkeeping Services</h2>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
        <div class="record">
          <div class="block"> <img src="images/border_1.png" alt="" />
            <div class="detail"> 
              <p>Experienced</p>
            </div>
          </div>
          <div class="block"> <img src="images/border_2.png" alt="" />
            <div class="detail"> 
              <p>Professionals</p>
            </div>
          </div>
          <div class="block"> <img src="images/border_3.png" alt="" />
            <div class="detail"> 
              <p>Highly Dedicated</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 team_img_wrap animate-in fadeInRight" data-speed="0.7" data-show-screen="0.7"> <img src="images/a.jpg" class="img-responsive team" alt=""  style="height:411px;width:458px" /> </div>
    </div>
    <!-- row --> 
  </div>
  <!-- container --> 
</div>
<!-- legal_help -->

<div class="services_section">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="service_box" data-speed="0.8" data-show-screen="0.7"> <i class="fa fa-briefcase"></i>
          <h4>Employment Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
          <a href="#">More</a> </div>
      </div>
      <!-- col3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="service_box" data-speed="0.8" data-show-screen="0.7"> <i class="fa fa-book"></i>
          <h4>Discrimination </h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
          <a href="#">More</a> </div>
      </div>
      <!-- col3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="service_box" data-speed="0.8" data-show-screen="0.7"> <i class="fa fa-building"></i>
          <h4>trust & estates</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
          <a href="#">More</a> </div>
      </div>
      <!-- col3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="service_box" data-speed="0.8" data-show-screen="0.7"> <i class="fa fa-users"></i>
          <h4>Retaliation </h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
          <a href="#">More</a> </div>
      </div>
      <!-- col3 --> 
    </div>
    <!-- row --> 
  </div>
  <!-- container --> 
</div>
<!-- services_section -->

<!-- <div class="porgress_area">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-6" data-speed="0.8" data-show-screen="0.7">
        <div id="diagram_1" class="diagram" data-circle-diagram='{ "percent": "75% <span>wining cases</span>", "size": "270", "borderWidth": "10", "bgFill": "rgba(32,166,100,0.2)", "frFill": "#cc8801","textSize": "40", "textColor": "#fff"}'> </div>
      </div>
      <div class="col-sm-3 col-xs-6" data-speed="0.8" data-show-screen="0.7">
        <div id="diagram_2" class="diagram" data-circle-diagram='{ "percent": "60% <span>problems solved</span>", "size": "270", "borderWidth": "10", "bgFill": "rgba(32,166,100,0.2)", "frFill": "#cc8801","textSize": "40", "textColor": "#fff"}'> </div>
      </div>
      <div class="col-sm-3 col-xs-6" data-speed="0.8" data-show-screen="0.7">
        <div id="diagram_3" class="diagram" data-circle-diagram='{ "percent": "90% <span>satisfied clients</span>", "size": "270", "borderWidth": "10", "bgFill": "rgba(32,166,100,0.2)", "frFill": "#cc8801","textSize": "40", "textColor": "#fff"}'> </div>
      </div>
      <div class="col-sm-3 col-xs-6" data-speed="0.8" data-show-screen="0.7">
        <div id="diagram_4" class="diagram" data-circle-diagram='{ "percent": "50% <span>Applied Practices</span>", "size": "270", "borderWidth": "10", "bgFill": "rgba(32,166,100,0.2)", "frFill": "#cc8801","textSize": "40", "textColor": "#fff"}'> </div>
      </div>
    </div>
  </div>
</div> -->




<span id="practices"></span>

<div class="section practice_area_section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="section_title" data-speed="0.8" data-show-screen="0.7"> <span class="highlight"><span>Want help?</span></span>
          <h2 data-head="Our Services">Our Services</h2>
        </div>
      </div>
      <div class="col-md-3 col-xs-6">
        <div class="outer_wrap" data-speed="0.8" data-show-screen="0.7">
          <div class="inner_box"> <i class="fa fa-gavel"></i>
            <h4>Lorem ipsum dolor</h4>
          </div>
        </div>
      </div>
      <!-- col3 -->
      <div class="col-md-3 col-xs-6">
        <div class="outer_wrap" data-speed="0.8" data-show-screen="0.7">
          <div class="inner_box"> <i class="fa fa-chain-broken"></i>
            <h4>Lorem ipsum dolor</h4>
          </div>
        </div>
      </div>
      <!-- col3 -->
      <div class="col-md-3 col-xs-6">
        <div class="outer_wrap" data-speed="0.8" data-show-screen="0.7">
          <div class="inner_box"> <i class="fa fa-briefcase"></i>
            <h4>Lorem ipsum dolor</h4>
          </div>
        </div>
      </div>
      <!-- col3 -->
      <div class="col-md-3 col-xs-6">
        <div class="outer_wrap" data-speed="0.8" data-show-screen="0.7">
          <div class="inner_box"> <i class="fa fa-database"></i>
            <h4>Lorem ipsum dolor</h4>
          </div>
        </div>
      </div>
      <!-- col3 -->
      <div class="col-md-3 col-xs-6">
        <div class="outer_wrap" data-speed="0.8" data-show-screen="0.7">
          <div class="inner_box"> <i class="fa fa-money"></i>
            <h4>Lorem ipsum dolor</h4>
          </div>
        </div>
      </div>
      <!-- col3 -->
      <div class="col-md-3 col-xs-6">
        <div class="outer_wrap" data-speed="0.8" data-show-screen="0.7">
          <div class="inner_box"> <i class="fa fa-car"></i>
            <h4>Lorem ipsum dolor</h4>
          </div>
        </div>
      </div>
      <!-- col3 -->
      <div class="col-md-3 col-xs-6">
        <div class="outer_wrap" data-speed="0.8" data-show-screen="0.7">
          <div class="inner_box"> <i class="fa fa-paper-plane"></i>
            <h4>Lorem ipsum dolor</h4>
          </div>
        </div>
      </div>
      <!-- col3 -->
      <div class="col-md-3 col-xs-6">
        <div class="outer_wrap" data-speed="0.8" data-show-screen="0.7">
          <div class="inner_box"> <i class="fa fa-building"></i>
            <h4>Lorem ipsum dolor</h4>
          </div>
        </div>
      </div>
      <!-- col3 --> 
      
    </div>
    <!-- row --> 
  </div>
  <!-- container --> 
</div>
<!-- services_section -->

<div class="paper_works-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 animate-in fadeInTop" data-speed="0.8" data-show-screen="0.7">
        <div class="section_title white"> <span class="highlight"><span>Paper Works</span></span>
          <h2 data-head="Watch Our Lastest Cases">Lorem ipsum dolor</h2>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
      </div>
      <!-- col-sm-6 -->
      <div class="col-sm-6 animate-in fadeInBottom" data-speed="0.8" data-show-screen="0.7">
<!--         <div class="video">
          <iframe src="#" allowfullscreen></iframe>
        </div> -->
      </div>
      <!-- col-sm-6 --> 
    </div>
    <!-- row --> 
  </div>
  <!-- container --> 
</div>

<div class="section clients_review" data-speed="0.8" data-show-screen="0.7">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="section_title"> <span class="highlight"><span>Clients thiking</span></span>
          <h2 data-head="Our Clients Reviews">Our Clients Reviews</h2>
        </div>
        <div data-ride="carousel" class="carousel slide" id="review_slider">
          <div role="listbox" class="carousel-inner">
            <div class="item active">
              <div class="review">
                <div class="text"> <span class="quote"><i class="fa fa-quote-left"></i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="name">Robert James<span>Businessman</span></div>
                <div class="show_mobile"> <i class="fa fa-arrow-circle-down"></i>
                  <div class="figure"> <img src="images/reviewer_image_1.jpg" alt="image" /> </div>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="item">
              <div class="review">
                <div class="text"> <span class="quote"><i class="fa fa-quote-left"></i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="name">Robert James<span>Businessman</span></div>
                <div class="show_mobile"> <i class="fa fa-arrow-circle-down"></i>
                  <div class="figure"> <img src="images/reviewer_image_2.jpg" alt="image" /> </div>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="item">
              <div class="review">
                <div class="text"> <span class="quote"><i class="fa fa-quote-left"></i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="name">Robert James<span>Businessman</span></div>
                <div class="show_mobile"> <i class="fa fa-arrow-circle-down"></i>
                  <div class="figure"> <img src="images/reviewer_image_3.jpg" alt="image" /> </div>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="item">
              <div class="review">
                <div class="text"> <span class="quote"><i class="fa fa-quote-left"></i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="name">Robert James<span>Businessman</span></div>
                <div class="show_mobile"> <i class="fa fa-arrow-circle-down"></i>
                  <div class="figure"> <img src="images/reviewer_image_4.jpg" alt="image" /> </div>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="item">
              <div class="review">
                <div class="text"> <span class="quote"><i class="fa fa-quote-left"></i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="name">Robert James<span>Businessman</span></div>
                <div class="show_mobile"> <i class="fa fa-arrow-circle-down"></i>
                  <div class="figure"> <img src="images/reviewer_image_5.jpg" alt="image" /> </div>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="item">
              <div class="review">
                <div class="text"> <span class="quote"><i class="fa fa-quote-left"></i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="name">Robert James<span>Businessman</span></div>
                <div class="show_mobile"> <i class="fa fa-arrow-circle-down"></i>
                  <div class="figure"> <img src="images/reviewer_image_6.jpg" alt="image" /> </div>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="item">
              <div class="review">
                <div class="text"> <span class="quote"><i class="fa fa-quote-left"></i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="name">Robert James<span>Businessman</span></div>
                <div class="show_mobile"> <i class="fa fa-arrow-circle-down"></i>
                  <div class="figure"> <img src="images/reviewer_image_3.jpg" alt="image" /> </div>
                </div>
              </div>
            </div>
            <!-- item --> 
          </div>
          <!-- carousel-inner -->
          <ol class="carousel-indicators">
            <li data-target="#review_slider" data-slide-to="0"> <i class="fa fa-arrow-circle-down"></i>
              <div class="figure"> <img src="images/reviewer_image_1.jpg" alt="image" /> </div>
            </li>
            <li data-target="#review_slider" data-slide-to="1"> <i class="fa fa-arrow-circle-down"></i>
              <div class="figure"> <img src="images/reviewer_image_2.jpg" alt="image" /> </div>
            </li>
            <li data-target="#review_slider" data-slide-to="2"> <i class="fa fa-arrow-circle-down"></i>
              <div class="figure"> <img src="images/reviewer_image_3.jpg" alt="image" /> </div>
            </li>
            <li data-target="#review_slider" data-slide-to="3" class="active"> <i class="fa fa-arrow-circle-down"></i>
              <div class="figure"> <img src="images/reviewer_image_4.jpg" alt="image" /> </div>
            </li>
            <li data-target="#review_slider" data-slide-to="4"> <i class="fa fa-arrow-circle-down"></i>
              <div class="figure"> <img src="images/reviewer_image_5.jpg" alt="image" /> </div>
            </li>
            <li data-target="#review_slider" data-slide-to="5"> <i class="fa fa-arrow-circle-down"></i>
              <div class="figure"> <img src="images/reviewer_image_6.jpg" alt="image" /> </div>
            </li>
            <li data-target="#review_slider" data-slide-to="6"> <i class="fa fa-arrow-circle-down"></i>
              <div class="figure"> <img src="images/reviewer_image_3.jpg" alt="image" /> </div>
            </li>
          </ol>
          <!-- Indicators --> 
        </div>
        <!-- carousel --> 
      </div>
    </div>
    <!-- row --> 
  </div>
  <!-- container --> 
</div>


<!-- <div class="paper_works-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 animate-in fadeInTop" data-speed="0.8" data-show-screen="0.7">
        <div class="section_title white"> <span class="highlight"><span>Paper Works</span></span>
          <h2 data-head="Watch Our Lastest Cases">Lorem ipsum dolor</h2>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
      </div>
      <!-- col-sm-6 -->
<!--       <div class="col-sm-6 animate-in fadeInBottom" data-speed="0.8" data-show-screen="0.7">
       <div class="video">
          <iframe src="#" allowfullscreen></iframe>
        </div> 
      </div> -->
      <!-- col-sm-6 --> 
    <!-- </div> -->
    <!-- row --> 
<!--   </div> -->
  <!-- container --> 
<!-- </div> -->


<div class="client_section" data-speed="0.8" data-show-screen="0.7">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">   
        <div id="client_slider" class="carousel slide" data-ride="carousel"> 
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="col-sm-3 testimonial-block"> <img src="images/client_1.png" alt="client logo" class="img-responsive" /> </div>
            <div class="col-sm-3 testimonial-block"> <img src="images/client_2.png" alt="client logo" class="img-responsive" /> </div>
            <div class="col-sm-3 testimonial-block"> <img src="images/client_3.png" alt="client logo" class="img-responsive" /> </div>
            <div class="col-sm-3 testimonial-block"> <img src="images/client_1.png" alt="client logo" class="img-responsive" /> </div>
          </div>
          <!-- item -->
          <div class="item">
            <div class="col-sm-3 testimonial-block"> <img src="images/client_1.png" alt="client logo" class="img-responsive" /> </div>
            <div class="col-sm-3 testimonial-block"> <img src="images/client_2.png" alt="client logo" class="img-responsive" /> </div>
            <div class="col-sm-3 testimonial-block"> <img src="images/client_3.png" alt="client logo" class="img-responsive" /> </div>
            <div class="col-sm-3 testimonial-block"> <img src="images/client_1.png" alt="client logo" class="img-responsive" /> </div>
          </div>
          <!-- item --> 
        </div>
        <!-- carousel-inner --> 
        
        <!-- Left and right controls --> 
        <a class="left carousel-control" href="#client_slider" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> </a> <a class="right carousel-control" href="#client_slider" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a> </div> <!-- carousel --> 
      </div>  
    </div> <!-- row --> 
  </div> <!-- container --> 
</div>
<!-- latest_case_section -->




@endsection
