<?php
	require_once('mobile_device_ass3.php');
	$flag = mobile_device_ass3($iphone=true,$ipad=true,$android=true);
?>
<!doctype html> 
<html lang="en"> 
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width" />
		<title>Use of appropriate map</title>
		<style type="text/css">
			h1 {
				text-align: center;
				font-size: medium;
			}
			fieldset {
				text-align: center;
				border: 1px solid #CCC;
				padding: 3px;
			}
			label, input {
				margin: 3px 0;
				clear: both;
				font-size: x-small;
			}
			p {
				margin: 0 0 0 40px;
				font-size: x-small;
			}
			#map_canvas {
				width: 200px;
				height: 200px;
				margin: 0 0 0 40px;
			}
		</style>
	</head> 
	<body> 
		<header>
			<h1>Assignment 3</h1>
		</header>
		<div id="content">
			<form id="favNum" action="ass3part3.php" method="get">
				<fieldset>
					<label for="theFavNum">Please type your favorite number (in the 1 - 100 range): </label>
					<input type="number" min="1" max="100" step="1" required aria-required /><br/>
					<input type="submit" value="Submit" />
				</fieldset>
			</form>
			<h1>My Current Location:</h1>
			<p id="latitude"></p>
			<p id="longitude"></p>
			<p id="timestamp"></p>
			<div id="map_canvas"></div>
		</div>
		<footer>
		</footer>
		<?php
			if ($flag == 1) {
				echo '<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAA0wJpXzS2D2t3E0o72p1127Wc9ZFibF4&sensor=true"></script>';
			}
			echo('<script>var flag = ' . $flag . '</script>'); 
		?>
		<script>
			function userLocated(position) {
				var	latitude = position.coords.latitude,
					longitude = position.coords.longitude,
					timeOfLocation = position.timestamp;
					myOptions = {
						zoom: 10,
						center: new google.maps.LatLng(latitude, longitude),
						mapTypeId: google.maps.MapTypeId.ROADMAP
					  };
				document.getElementById('latitude').innerHTML = 'Latitude = ' + latitude;
				document.getElementById('longitude').innerHTML = 'Longitude = ' + longitude;
				document.getElementById('timestamp').innerHTML = 'Timestamp = ' + timeOfLocation;
				var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
			}
			function userLocatedStatic(position) {
				var	latitude = position.coords.latitude,
					longitude = position.coords.longitude,
					timeOfLocation = position.timestamp;
				document.getElementById('latitude').innerHTML = 'Latitude = ' + latitude;
				document.getElementById('longitude').innerHTML = 'Longitude = ' + longitude;
				document.getElementById('timestamp').innerHTML = 'Timestamp = ' + timeOfLocation;
				document.getElementById('map_canvas').innerHTML = '<img src="http://maps.googleapis.com/maps/api/staticmap?center=' + latitude + ',' + longitude + '&zoom=10&size=200x200&sensor=true&maptype=roadmap" width="200" height="200" alt="" />';
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
			if (navigator.geolocation) {
				if (flag === 1) {
					navigator.geolocation.getCurrentPosition(userLocated, locationError, {
						timeout: 10000,
						maxumumAge: 30000,
						enableHighAccuracy: false
					});
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
		</script>
	</body>
</html> 