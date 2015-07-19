<?php 
	header('Content-Type:text/html; charset=utf-8');
	session_start(); 
	date_default_timezone_set('America/Toronto');
	$today = $today = date("l, F j, Y");  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Janet (Zhanna) Kulyk\'s Web Site - Web Development Services - Contact Information</title>		
		<meta name="author" content="Janet (Zhanna) Kulyk" />
		<meta name="keywords" content="Janet (Zhanna) Kulyk, contact information, contact form" />
		<meta name="description" content="This page contains Janet (Zhanna) Kulyk's contact information: phone numbers, email, map as well as contact form." />
		<link rel="stylesheet" type="text/css" href="css/gen.css" />
		<!--[if IE]> <link href="css/ie.css" rel="stylesheet" /> <![endif]-->  
		<!--[if lt IE 7]> <link href="css/ie6.css" rel="stylesheet" /> <![endif]-->	
		<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>		
		<script type="text/javascript">
			$(document).ready(function(){					
				$('input[type="text"]').blur(function() {
						var thisfield = this;
						$.getJSON("ajax_validate_get.php", {
							"field": this.name,
							"value": this.value
						}, function (data) {
							if (data == "") {
								$(thisfield).siblings("span.error").empty();
							} else {
								$(thisfield).siblings("span.error").empty().append(data);
							}
						});
				  });				  
				  
				  $('textarea').blur(function() {
						var thisfield = this;
						$.getJSON("ajax_validate_get.php", {
							"field": this.name,
							"value": this.value
						}, function (data) {
							if (data == "") {
								$(thisfield).siblings("span.error").empty();
							} else {
								$(thisfield).siblings("span.error").empty().append(data);
							}
						});
				  });					
			});
		</script>
	</head>
	
	<body onload="load()" onunload="GUnload()">

		<div id="banner">	 
			<div class="bg_top"></div>
			<div id="logo"><a href="http://janetkulyk.com">http://janetkulyk.com</a></div>										
			<div id="date_time"><span id="date"><?php echo $today; ?></span><span id="clock">&nbsp;</span></div>
			<div class="bg_bottom"></div>
		</div>	
				<div id="content">						
			<div id="content_container">	
		
				<div class="bg_nav">
					<div id="navtop" class="page">
							<?php include("inc/topNav.php") ?>															
							<div id="login_menu">													
								<ul id="menu_login">			
									<?php
										if (isset($_SESSION['user_id'])) {					
											// Add the logout link:
											echo '<li><a href="logout.php">Logout</a></li>
												  <li><a href="change_password.php">Change My Password</a></li>';					
										} else {				
											// Register, login, and change_password links:
											echo '<li><a href="register.php">Register</a></li>
												<li><a href="login.php">Login</a></li>';					
										}
									?>				
								</ul>		
							</div>
							<?php
								if (isset($_SESSION['user_id'])) {												
									echo '<div class="hello">Hello ' . $_SESSION['first_name'] . '!</div>';					
								}
							?>								
					</div>					
				</div>						
				<div id="contact">
				
					<div id="col_left">
						<?php include("inc/w3c.inc") ?>	
					</div>
	
					<div id="col_middle">
						<div id="contact_info" class="chapter resizable rounded {10px}">
							<h1>Contact Information</h1>
							<div id="contact_email"><span>E-mail:</span> <a href="mailto:zhanna_kulyk@yahoo.com">janetkulyk@yahoo.com</a></div>
							<div id="contact_phone"><span>Phone: (416) 929-4372</span></div>
							<div id="contact_mobile"><span>Mobile: (416) 841-4372</span></div>
							<div id="contact_skype"><span>Skype: janetkulyk</span></div>							
						</div>																 
						<div id="map" class="map"></div>
						<h2>Contact Me</h2>											
						<?php include_once("forms/test_form_contactme.php") ?>
					</div>
				
					<div id="col_right">
						<div class="resizable quotation rounded {10px}">
							<blockquote>
								<div><span>&quot;</span>Non progrede est regrede<span>&quot;</span></div>
							</blockquote>
							<blockquote>
								<div><span>&quot;</span>Not going forward is coming back.<span>&quot;</span></div>
							</blockquote>
						</div>									
					</div>
						
			  </div>
					
					
				</div>
			</div>										
				
			<?php include("inc/footer.inc.php"); ?>
			<script type="text/javascript" src="js/optimized.js"></script>
			<script type="text/javascript">
				//<![CDATA[
				$('#sf-menu_contact>a') .css('background-color','#005A9C') .css('color','#FFF') .css('cursor','text');					//]]>	
			</script>
			<script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAzVZ7k8GQ17_REu87hKibARR1ZuMXoGkWZuRTQpDtBwbJyWGf-RSCS6le_JOouCcCuxBwnt01rNKIQw"></script>
			<script type="text/javascript">
					//<![CDATA[	
					function load() {
						if (GBrowserIsCompatible()) {
							var map = new GMap2(document.getElementById("map"));
							var point = new GLatLng(43.667566, -79.405817);
							map.setCenter(point, 13);
							map.addOverlay(createMarker(map,point,0));
							map.addControl(new GLargeMapControl());
							map.addControl(new GMapTypeControl());							
							var trafficInfo = new GTrafficOverlay();
							map.addOverlay(trafficInfo);
						}
					}
		
					function createMarker(map,point, number) {
						var marker = new GMarker(point);
						var message = ["22 Walmer Rd,Toronto, ON, M5R 2W5, Canada"];
						marker.value = number;				
						GEvent.addListener(marker, "click", function() {
							var myHtml = "22 Walmer Rd,Toronto, ON, M5R 2W5, Canada";
							map.openInfoWindowHtml(point,myHtml);
							});
							return marker;
					}
					//]]>
			</script>
			<script type="text/javascript" src="js/jquery.maxlength.js"></script>  
			<script type="text/javascript">$().ready(function(){$("#message").maxLength(250);});</script>  
			<?php include("inc/ga.php"); ?>
  	</body>
</html>