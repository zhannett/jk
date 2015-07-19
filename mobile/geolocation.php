<?php 
	header('Content-Type: application/xhtml+xml;charset=utf-8');
	header('Cache-Control: no-transform');
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN"
"http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
	<head> 
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
		<meta name="HandheldFriendly" content="True" /> <!-- BB  -->
		<meta name="MobileOptimized" content="width" /> <!-- mobile IE -->
		<title>Janet Kulyk Website - Using Geolocation &amp; Error Handling</title>
		<link type="text/css" rel="stylesheet" media="screen" href="css/basic.css" />
		<!--[if !IE]>-->
			<link type="text/css" rel="stylesheet" media="(max-device-width: 240px) and (max-device-height: 320px)" href="css/midend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 320px) and (max-device-width: 960px)" href="css/highend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 961px)" href="css/desktop.css" />
		<!--<![endif]-->
		<style type="text/css">
			.center {
				margin: 20px 30px;
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
			<li><a href="contact.php" class="navlink" accesskey="3">Contact Me</a></li>
		</ol>
		<div id="content">
			<h2>Using Geolocation and Error Handling</h2>
			<div class="center">
				<strong>Your Current Location:</strong>
				<p id="latitude"></p>
				<p id="longitude"></p>
				<p id="timestamp"></p>
				<div id="map_canvas"></div>
			</div>
		</div>
		<?php include('inc/footer.inc.php'); ?>
		<script type="text/javascript">
			function userLocated(position) {
				var	latitude = position.coords.latitude,
					longitude = position.coords.longitude,
					timeOfLocation = position.timestamp;
				document.getElementById('latitude').innerHTML = 'Latitude = ' + latitude;
				document.getElementById('longitude').innerHTML = 'Longitude = ' + longitude;
				document.getElementById('timestamp').innerHTML = 'Timestamp = ' + timeOfLocation;
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
			if (navigator.geolocation === undefined) {
				alert('Geolocation API not present');
			}else {
				navigator.geolocation.getCurrentPosition(userLocated, locationError, {
					timeout: 10000,
					maxumumAge: 30000,
					enableHighAccuracy: false
				});
			} 
		</script>
	</body>
</html>