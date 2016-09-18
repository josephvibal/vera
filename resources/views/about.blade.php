@extends('layout.main')
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.7.1.min.js"></script>
        <style type="text/css">
			.header{
				background-color: white;
			}
			.nav{
				padding: 21px 0 14px !important;
			}
		</style>
@section('content')



        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
       	
       	<div id="preload">
	       	<img src="images/bcg_slide-1.jpg">
	       	<img src="images/bcg_slide-2.jpg">
	       	<img src="images/bcg_slide-3.jpg">
	       	<img src="images/bcg_slide-4.jpg">
       	</div>
       	
       	<main>
       	 
	        <section id="slide-1" class="homeSlide">
	        	<div class="bcg">
		        	<div class="hsContainer">
			    		<div class="hsContent">
				    		<h2>Simple parallax scrolling is...</h2>
			    		</div>
		        	</div>
	        	</div>
		    </section>
		    
		    <section id="slide-2" class="homeSlide">
		    	<div class="bcg">
			    	<div class="hsContainer">
			    		<div class="hsContent">
				    		<h2>great for story telling websites.</h2>
			    		</div>
		        	</div>
		    	</div>
		    </section>
		    
			<section id="slide-3" class="homeSlide">
				<div class="bcg">
			    	<div class="hsContainer">
		    			<div class="hsContent">
				    		<h2>Now go and create your own story</h2>
			    		</div>
			    	</div>
			    	
			    </div>
			</section>
			
			<section id="slide-4" class="homeSlide">
				<div class="bcg">
			    	<div class="hsContainer">
		    			<div class="hsContent">
				    		<h2>and share mine.</h2>
			    		</div>
			    	</div>
			    	
			    </div>
			</section>
		    
		</main>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/imagesloaded.js"></script>
        <script src="js/skrollr.js"></script>
        <script src="js/_main.js"></script>

@stop