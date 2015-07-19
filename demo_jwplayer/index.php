<!DOCTYPE html>
<html>
    <head>
	<title>Image Rotator with JWPlayer</title>
	<link href="../css/modal.css" rel="stylesheet" type="text/css" />
	<link href="http://janetkulyk.s3.amazonaws.com/css/jwplayer.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
	<div id="slider" class="slider">
		<div class="slidercontrols">
		    <div class="controls_abs">
			<div class="controls_l"></div>
			<div class="controls_r"></div>
			<div class="controls_abs_inner"></div>	
		    </div> 
		</div>
		<div class="slidercontent">	    
		    <div class="sliderelement"> <a id="slide0" href=""><img src="http://janetkulyk.s3.amazonaws.com/js/plugins/Slide1.jpg"></a></div>            
		    <div class="sliderelement"> <a id="slide1" href=""><img src="http://janetkulyk.s3.amazonaws.com/js/plugins/Slide2.jpg"></a> </div>
		    <div class="sliderelement"> <a id="slide2" href=""><img src="http://janetkulyk.s3.amazonaws.com/js/plugins/Slide3.jpg"></a> </div>
		    <div class="sliderelement"> <a id="slide3" href=""><img src="http://janetkulyk.s3.amazonaws.com/js/plugins/Slide4.jpg"></a> </div>	   	
		</div> 
		<div id="video"></div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
	<script src="http://janetkulyk.s3.amazonaws.com/js/plugins/jwplayer_license.js"></script>
	<script src="http://janetkulyk.s3.amazonaws.com/js/plugins/jwplayer.js"></script>
	<script src="http://janetkulyk.s3.amazonaws.com/js/plugins/initializeSlider.js"></script>
    </body>
</html>
