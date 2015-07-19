<?php
	header('Content-Type: text/html;charset=utf-8');
	header('Cache-Control: no-transform');
	function mobile_device() {
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		$flag = 'static';
		if (preg_match('/ipad/i', $user_agent)) {
			$ipad = true;
		}
		if (preg_match('/ipod/i', $user_agent)||preg_match('/iphone/i',$user_agent)) {
			$iphone = true;
		}
		if (preg_match('/android/i', $user_agent)) {
			$android = true;
		}
		if (preg_match('/safari/i', $user_agent)) {
			$safari = true;
		}
		if (preg_match('/chrome/i', $user_agent)) {
			$chrome = true;
		}
		if((($safari == true) && ($ipad == true || $iphone == ture)) || $android == true || $chrome == true) {
			$flag = 'v3';
		} else {
			$flag = 'static';
		}
		return $flag;
	} 
	$flag = mobile_device();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
		<meta name="HandheldFriendly" content="True" /> <!-- BB  -->
		<meta name="MobileOptimized" content="width" /> <!-- mobile IE -->
		<title>Janet Kulyk Website - Using Google Maps</title>
		<link type="text/css" rel="stylesheet" media="screen" href="css/basic.css" />
		<!--[if !IE]>-->
			<link type="text/css" rel="stylesheet" media="(max-device-width: 240px) and (max-device-height: 320px)" href="css/midend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 320px) and (max-device-width: 960px)" href="css/highend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 961px)" href="css/desktop.css" />
		<!--<![endif]-->
		<style type="text/css">
			.center {
				margin: 1.2em auto;
			}
			.bold {
				margin: 0 auto;
				text-align: center;
				font-weight:bold;
			}
			#map_canvas {
				width: 12.5em;
				height: 12.5em;
				margin: 0.8em auto;
			}
		</style>
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="icon" type="image/png" href="favicon.png" />
		<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" />
	</head> 
	<body>
		<?php include('inc/header.inc.php'); ?>
		<ol id="nav">
			<li><a href="index.php" class="navlink" accesskey="1">Home</a></li>
			<li><a href="about.php" class="navlink" accesskey="2">About</a></li>
			<li><a href="contact.php" accesskey="3">Contact Me</a></li>
		</ol>
		<div id="content">
			<h2>Using Google Maps</h2>
			<p class="bold">Your current location :</p>
			<div id="map_canvas"></div>
			<p>Google Maps come in two flavours: Google Maps API v3 and Google Maps Static API. The former is specifically for iPhone and Android devices, while the latter is compatible with any mobile device.</p>
			<p>This page delivers Google Map API v3 for Safari on iOS (for iPad, iPhone, iPod Touch), Android browser and Google Chrome browser on desktop and Google Maps Static API for other browsers.</p>
		</div>
		<?php 
			include('inc/footer.inc.php'); 
			print("<script type='text/javascript'>var flag = '$flag';</script>"); 
		?>
		<script type="text/javascript">
			function userLocated(position) {
				var	latitude = position.coords.latitude,
					longitude = position.coords.longitude,
					myLatlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
					myOptions = {
						zoom: 12,
						center: myLatlng,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					 },
					map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
					marker = new google.maps.Marker({
						position: myLatlng,
						map: map,
						title: "You are located here!"
					});
			}
			function userLocatedStatic(position) {
				var	latitude = position.coords.latitude,
					longitude = position.coords.longitude;
					document.getElementById('map_canvas').innerHTML = '<img src="http://maps.googleapis.com/maps/api/staticmap?center= ' + latitude + ',' + longitude + '&amp;zoom=12&amp;size=200x200&amp;markers=color:red%7C' + latitude + ',' + longitude + '&amp;sensor=true&amp;maptype=roadmap" width="200" height="200" alt="" />';
			}
			function locationError(error) {
				switch(error.code) {
					case error.PERMISSION_DENIED:
						//error handling
						alert("Permission denied");
						break;
					case error.POSITION_UNAVAILABLE:
						//errorhandling
						alert("Position unavailable");
						break;
					case error.TIMEOUT:
						//error handling
						alert("Timeout");
						break;
				}
			}
			function initialize() {
				navigator.geolocation.getCurrentPosition(userLocated, locationError);
			}
			function loadScript() {
			  var script = document.createElement("script");
			  script.type = "text/javascript";
			  script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAA0wJpXzS2D2t3E0o72p1127Wc9ZFibF4&sensor=true&callback=initialize";
			  document.body.appendChild(script);
			}
			window.onload = function() {
				if (navigator.geolocation) {
					if (flag === 'v3') {
						loadScript();
					} else {
						navigator.geolocation.getCurrentPosition(userLocatedStatic, locationError, {
							timeout: 10000,
							maximumAge: 30000,
							enableHighAccuracy: false
						});
					}
				} else {
					alert('Geolocation API not present');
				}
			}
		</script>
	</body>
</html>