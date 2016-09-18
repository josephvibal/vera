@extends('layout.main')

@section('content')


<style type="text/css">
    h2{
        font-family: 'latothin';
    }
	</style>
<style>
    #map_canvas {
        width: 500px;
        height: 400px;
    }

    #header
    {

        width: 100%;
        height: 500px; overflow: hidden;


    }
    .bs-docs-header {
        /*padding-top: 290px;*/

        min-height: 266px;
        font-size: 24px;
        text-align: left;

        margin-bottom: 60px;
        width:100%;
        height:350px;
        background-image:url('public/images/488015_554489737959492_958409624_n.jpg');
        background-size:cover;
    }
</style>
<script src="./Contact Us _ Loop STC_files/js"></script>
<script>
    function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
            center: new google.maps.LatLng(14.557357500000000000, 121.008870699999990000),
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            },
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.SMALL,
                position: google.maps.ControlPosition.RIGHT_BOTTOM
            },
            scaleControl: false,  // fixed to BOTTOM_RIGHT
            streetViewControl: false,
            streetViewControlOptions: {
                position: google.maps.ControlPosition.LEFT_TOP
            }
        }
        var map = new google.maps.Map(map_canvas, map_options)
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<br><br><br><br>
        <div class="container">
            <div class="col-md-6 col-xs-12 info">
                <h2>Contact Info <br></h2>
                <img src="{{ URL::asset('images/divider.jpg') }}" width="100%">
                <div align="center" id="map_canvas">
                <br><br><br>
                </div>
                <p class="well">Unit 1C Emiritz Bldg. Rose of Heaven Drive<br>
                    Talon Village 4 Laspiñas City,Philippines<br>
                    Tel. Number: (+632)799-8845<br>
                    eMail: info@vera-associates.com</p>
            </div>
            <div class="col-md-6 col-xs-12 ">
                <h2>Contact Form <br></h2>
                <img src="{{ URL::asset('images/divider.jpg') }}" width="100%">
                <form class="form-horizontal well" align="center">
                    <div style="margin-top:30px;">
                        <div class="form-group">
                        <div class="col-sm-12">
                          <input type="text" class="form-control input-lg" placeholder="Name*:">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="email" class="form-control input-lg" placeholder="E-mail*:">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="text" class="form-control input-lg" placeholder="Phone:">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <textarea class="form-control input-lg" rows="3" placeholder="Message*:"></textarea>
                        </div>
                      </div>

			            <div class="form-group">
		                <label for="CaptchaCode" class="col-md-4 control-label">Enter Captcha</label>

		                 	<div class="col-md-6">
		                 <?php echo str_replace('BotDetect CAPTCHA Library for Laravel', '', captcha_image_html('LoginCaptcha'));?>
						
						  <input type="text" id="CaptchaCode" name="CaptchaCode">		                 		
		                 	</div>

		                </div>
                      
                      <div class="form-group">
                        <div class="pull-right">
                        
                            <div align="right" class="col-xs-6"><button type="submit" class="btn btn-danger btn-lg">Clear</button></div>
                            <div class="col-xs-6"><button type="submit" class="btn btn-danger btn-lg">Send</button></div>
                          
                        </div>
                      </div>
                    </div>
                  
                </form>
            </div>
        </div>


@stop