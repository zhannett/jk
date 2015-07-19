<?php
	header('Content-Type: text/html;charset=utf-8');
	header('Cache-Control: no-transform');
	function mobile_device() {
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		$flag = 'desktop';
		if (preg_match('/ipad/i', $user_agent)) {
			$ipad = true;
		}
		if (preg_match('/ipod/i', $user_agent)||preg_match('/iphone/i',$user_agent)) {
			$ipod = true;
		}
		if (preg_match('/iphone/i', $user_agent)||preg_match('/iphone/i',$user_agent)) {
			$iphone = true;
		}
		if (preg_match('/android/i', $user_agent)) {
			$android = true;
		}
		if (preg_match('/opera/i', $user_agent)) {
			$opera = true;
		}
		if (preg_match('/blackberry/i', $user_agent)) {
			$blackberry = true;
		}
		if($ipad == true || $iphone == true || $ipod == true || $android == true || $opera == true || $blackberry == true) {  // || $ff == true
			$flag = 'mobile';
		}
		return $flag;
	} 
	$flag = mobile_device();
?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
<link href='http://fonts.googleapis.com/css?family=Mate+SC' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/gif" href="../favicon_mlc.gif" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<meta name="description" content="Beautiful By Nature: Keswick is a Ravine Community Coming Soon to Windermere in South Edmonton. SIGN UP TO THE MAILING LIST FOR INFO AND UPDATES" />
<meta name="keywords" content="keswick, windermere edmonton, windermere south edmonton, currents windermere, ambleside windermere, upper windermere, new homes edmonton, keswick, river valley lots" />
<meta name="Copyright" content="© MLC Group. Please do not copy text, html, or graphics from this site without permission."/>
<meta name="robots" content="ALL"/>
<meta name="rating" content="General"/>
<meta name="google-site-verification" content="0l8lnLzR2fQAS7kjJuJM_inw6F7gw2zvIqaFcdfkO3k" />
<title>Keswick On the River</title>


		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="colors/blue.css" type="text/css" media="screen" />
		<!--[if !IE]>-->
        	<!--<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 320px) and (min-device-height: 480px) and (orientation:landscape)" href="mobile.css" />-->
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 320px) and (max-device-width: 960px)" href="mobile.css" />
		<!--<![endif]-->
		
</head>
<body>
	<?php
    	print("<script type='text/javascript'>var flag = '$flag';</script>"); 
        //print("<script type='text/javascript'>alert('$flag');</script>"); 
    ?>
	<div id="wrapper">
		<div id="container">
		
			<div id="progress"></div>					
			
			<ul id="top-buttons" class="top-buttons"> 
				<li><a class="trigger">Collapse or Expand</a></li>
				<li><a class="drag">Move</a></li>
			</ul>
			
			<div id="totoggle">
				<div id="infopage">
					<div class="content">
						<h2>Beautiful <em>by</em> Nature</h2>
						<p>Keswick, nestled alongside the picturesque North Saskatchewan river valley, is <span>Edmonton's Newest Exclusive</span> Address</p>
						<p>Located within the   <a href="http://en.wikipedia.org/wiki/Keswick,_Edmonton">Keswick Neighbourhood</a> in South Edmonton, Keswick on the River is a community that matches the perfect location with excellence in architecture and amenities. It is the neighbourhood <em><strong>you've been waiting for.</strong></em></p>
						<h2>Stay in the Know:</h2>
						<p><a href="http://eepurl.com/hzBkI">Subscribe to the priority mailing list.</a> Builders will be announced soon and you'll get sneak peaks and advance notice on events. Plus, we will never share your information with anyone.  </p>
					</div>
					<ul class="buttons">
						<li><a class="info">Show More Information</a></li>
						<li><a class="infocontact">Contact</a></li>
					</ul>
				</div>
				
				<div id="contactpage">
					<div class="content">
						<div class="one-half">
							<h2>Contact Keswick:</h2>
							<p>If you have a specific question please feel free to get in touch.</p>
							<p><a href="mailto:keswick@mlcland.com?subject=Keswick on the River">E-Mail</a></p>
							<p><span>phone:</span> (780) 420-0044</p>
							<p><span>address:</span> c/o MLC Group. Suite 1000, 10104-103 Avenue. Edmonton, Alberta. </p>
                            <p><span>find out more about the developer at:</span> <a href="http://www.mlcland.com">www.mlcland.com</a></p>
						</div>
						
						<div class="one-half last cf">
							
						</div>
					</div>
					
					<div class="clear"></div>
					
					<ul class="buttons">
						<li><a class="contactinfo">Show More Information</a></li>
						<li><a class="contact">Contact</a></li>
					</ul><!--end buttons-->						
				</div><!--end contactpage-->			
			
				<div id="homepage"></p>
                <h3><span class="exclusiveSmall">&#8212;Edmonton's Exclusive Address&#8212;</span> </h3>
					<a id="logo" class="logo" href="#"><img src="images/logo.png" alt="logo" width="449" height="313" /></a>
					
              <h2>
              	<div class="comingsoon"><span class="exclusivetooPiano">{</span> <span id="exclusivetoo" class="exclusivetoo"> coming soon</span> <span class="exclusivetooPiano">}</span></div>
                <div class="beautiful"><span id="exclusive" class="exclusive">Beautiful</span> <span class="exclusivetoo">by Nature</span></div>
              </h2> 
					<div id="subscribe">
					<div id="mesaj"></div>
					<form action="http://mlcland.us2.list-manage1.com/subscribe/post?u=8fbd09f6c52f17fb6940c0482&amp;id=0b60dff035" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
					  	<input type="email" value="" name="EMAIL" class="required email" placeholder="Enter Your Email Address" id="mce-EMAIL">
                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                    </form>	
				  </div>
   	  			  <ul class="buttons">
						<li><a class="info">I show some info</a></li>
						<li><a class="contact">I reveal the contact form</a></li>
				  </ul><!--end buttons-->				
			  </div><!--end homepage-->
			</div><!--end totoggle-->
		</div><!--end container-->

		<!--Thumbnail Navigation-->
  <div id="prevthumb"></div>
		<div id="nextthumb"></div>
		
		<!--Arrow Navigation-->
		<div id="thumb-tray" class="load-item">
			<div id="thumb-back"></div>
			<div id="thumb-forward"></div>
		</div>
		
		<!--Time Bar-->
		<div id="progress-back" class="load-item">
			<div id="progress-bar"></div>
		</div>
		
		<!--Control Bar-->
		<div id="controls-wrapper" class="load-item">
			<div id="controls">
				<div id="social">
					<h4>Share Keswick:</h4>
					<ul>
						<li><a class="twitter" href="http://www.twitter.com"><img src="images/social/twitter.png" alt="twitter icon" /></a></li>
				    	<li><a class="facebook" href="http://www.facebook.com/"><img src="images/social/facebook.png" alt="facebook icon" /></a></li>
						<li><a class="flickr" href="http://www.flickr.com/"><img src="images/social/flickr.png" alt="flickr icon" /></a></li>
						<li><a class="google" href="#"><img src="images/social/google.png" alt="google plus icon" /></a></li>
					</ul>
				</div>
				
				<div id="centered-controls" class="centered-controls">
					<a id="prevslide" class="load-item"><img src="images/back.png" alt="slide control" /></a>
					<a id="play-button"><img id="pauseplay" src="images/pause.png" alt="slide control" /></a>
					<a id="nextslide" class="load-item"><img src="images/forward.png" alt="slide control" /></a>
				</div>
				<a id="tray-button"><img id="tray-arrow" src="images/button-tray-up.png" alt="slide control" /></a>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function loadScripts() {
			var script0 = document.createElement("script"),
				script1 = document.createElement("script"),
				script2 = document.createElement("script"),
				script3 = document.createElement("script"),
				script4 = document.createElement("script"),
				script5 = document.createElement("script"),
				script6 = document.createElement("script"),
				script7 = document.createElement("script"),
				script8 = document.createElement("script"),
				script9 = document.createElement("script"),
				script10 = document.createElement("script"),
				script11 = document.createElement("script"),
				script12 = document.createElement("script");
			
			script0.type = "text/javascript";
			script0.src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js';
			document.body.appendChild(script0);
			
			script1.type = "text/javascript";
			script1.src = 'js/jquery.easing.min.js';
			document.body.appendChild(script1);
			
			script2.type = "text/javascript";
			script2.src = 'js/supersized.3.2.7.js';
			document.body.appendChild(script2);
			
			script3.type = "text/javascript";
			script3.src = 'js/supersized.shutter.js';
			document.body.appendChild(script3);
			
			script4.type = "text/javascript";
			script4.src = 'js/jquery.countdown.js';
			document.body.appendChild(script4);
			
			script5.type = "text/javascript";
			script5.src = 'js/jquery.contact.js';
			document.body.appendChild(script5);
			
			script6.type = "text/javascript";
			script6.src = 'js/jquery.subscribe.js';
			document.body.appendChild(script6);
			
			script7.type = "text/javascript";
			script7.src = 'js/jquery.ui.core.min.js';
			document.body.appendChild(script7);
			
			script8.type = "text/javascript";
			script8.src = 'js/jquery.ui.widget.min.js';
			document.body.appendChild(script8);
			
			script9.type = "text/javascript";
			script9.src = 'js/jquery.ui.mouse.min.js';
			document.body.appendChild(script9);
			
			script10.type = "text/javascript";
			script10.src = 'js/jquery.ui.draggable.min.js';
			document.body.appendChild(script10);
			
			script11.type = "text/javascript";
			script11.src = 'js/custom.js';
			document.body.appendChild(script11);
			
			script12.type = "text/javascript";
			script12.src = 'js/jquery.placeholder.js';
			document.body.appendChild(script12);
		}
		if(flag === 'desktop') {
			loadScripts();
		} else if (flag === 'mobile') {
			document.getElementById('logo').innerHTML = '<img src="images/logo_mobile.png" alt="" />';
			document.getElementById('mc-embedded-subscribe').style.height = '25px';
		}
	</script>
    <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-16222207-14");
pageTracker._trackPageview();
} catch(err) {}</script>
	
</body>
</html>
