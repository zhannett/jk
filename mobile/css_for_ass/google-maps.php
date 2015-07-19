<?php
	header('Content-Type: text/html;charset=utf-8');
	header('Cache-Control: no-transform');
	require_once('mobile_device.php');
	$flag = mobile_device($iphone=true, $ipad=true, $android=true);
	console.log($flag);
	var flag = '<?php echo $flag ?>';
?>
<!DOCTYPE html>
<!--[if IEMobile 7 ]><html xmlns="http://www.w3.org/1999/xhtml" class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html xmlns="http://www.w3.org/1999/xhtml" class="no-js"><!--<![endif]-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">--> 
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<meta name="HandheldFriendly" content="True" /> <!-- BB  -->
		<meta name="MobileOptimized" content="width" /> <!-- mobile IE -->
		<title>Janet Kulyk Website - Geolocation &amp; Google Maps</title>
		<link type="text/css" rel="stylesheet" media="screen" href="css/basic.css" />
		<!--[if !IE]>-->
			<link type="text/css" rel="stylesheet" media="only screen and (max-device-width: 176px) and (max-device-height: 220px)" href="css/midend1.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (max-device-width: 128px) and (max-device-height: 160px)" href="css/lowend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (device-width: 240px) and (device-height: 320px)" href="css/midend2.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 320px) and (max-device-width: 960px)" href="css/highend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 961px)" href="css/desktop.css" />
			<style type="text/css">
			.center {
				margin: 20px 30px;
			}
		</style>
		<!--<![endif]-->
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="icon" type="image/png" href="favicon.png" />
		<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" />
	</head> 
	<body> 
		<div id="header">
			<h1>m.janetkulyk.com</h1>
			<ol id="nav">
				<li><a href="mainmenu.html" accesskey="1">Main menu</a></li>
				<li><a href="setup.html" accesskey="2">Set up</a></li>
				<li><a href="help.html" accesskey="3">Help</a></li>
			</ol>
		</div>
		<div id="content">
			<h2>Using Geolocation and Error Handling</h2>
			<strong>Your Current Location:</strong>
			<div id="map_canvas"></div>
		</div>
		<div id="footer">
		</div>
		
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAA0wJpXzS2D2t3E0o72p1127Wc9ZFibF4&amp;sensor=true"></script>
		<script type="text/javascript">
			var flag = 1;
			function userLocated() {
				var	latitude = position.coords.latitude,
					longitude = position.coords.longitude,
					myLatlng = new google.maps.LatLng(latitude, longitude),
					myOptions = {
						zoom: 12,
						center: myLatlng,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					 },
					map = new google.maps.Map(document.getElementById("map_canvas"), myOptions),
					marker = new google.maps.Marker({
						position: myLatlng,
						map: map,
						title: "You are located here!"
					});
			}
			function userLocatedStatic(position) {
				var	latitude = position.coords.latitude,
					longitude = position.coords.longitude,
					timeOfLocation = position.timestamp;
				
				//document.getElementById('map_canvas').innerHTML = '<img src="http://maps.googleapis.com/maps/api/staticmap?center=' + latitude + ',' + longitude + '&amp;zoom=12&amp;size=200x200&amp;sensor=true&amp;maptype=roadmap" width="200" height="200" alt="" />';
			
				//document.getElementById('map_canvas').innerHTML = '<img src="http://maps.googleapis.com/maps/api/staticmap?center=45.508867,-73.554242&amp;zoom=12&amp;size=200x200&amp;sensor=true&amp;maptype=roadmap" width="200" height="200" alt="" />';
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
			window.onload = function () {
				if (navigator.geolocation) {
					if (flag === 1) {
						navigator.geolocation.getCurrentPosition(userLocated, locationError, {
							timeout: 10000,
							maxumumAge: 30000,
							enableHighAccuracy: false
						});
					} else {
						//static
					}
					
				}else {
					alert('Geolocation API not present');
				}
			}			
		</script>
	</body>
</html>