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
		<title>Janet Kulyk Website - Welcome!</title>
		<link type="text/css" rel="stylesheet" media="screen" href="css/basic.css" />
		<!--[if !IE]>-->
			<link type="text/css" rel="stylesheet" media="(max-device-width: 240px) and (max-device-height: 320px)" href="css/midend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 320px) and (max-device-width: 960px)" href="css/highend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 961px)" href="css/desktop.css" />
		<!--<![endif]-->
			<style type="text/css">
				#features {
					background: #f9d670;
				}
				#features li {
					border-top: 0.07em #fff solid;
					border-bottom: 0.07em #b6932e solid;
				}
				#features .even {
					background: #f9c93e;
				}
				#features a,
				#features span {
					display: block;
					padding: 0.5em 0.785em 0.55em;
				}
				#features p {
					display: block;
					padding: 0 0.785em 0.714em;
					color: #333;
				}
				a.inline {
					display: inline;
					margin: 0;
					padding: 0;
				}
			</style>
		
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="icon" type="image/png" href="favicon.png" />
		<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" />
		<!--
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png" />
		-->
	</head> 
	<body> 
		<?php include('inc/header.inc.php'); ?>
		<ol id="nav">
			<li><a href="index.php" class="highlighted" accesskey="1">Home</a></li>
			<li><a href="about.php" class="navlink" accesskey="2">About</a></li>
			<li><a href="contact.php" class="navlink" accesskey="3">Contact Me</a></li>
		</ol>
		<div id="content">
			<div class="welcome">
				<h2>Welcome!</h2>
				<p>My name is Janet. I am a Web Developer.</p>
				<p>My interest to mobile technologies pushed me to take  "Foundations of Mobile Business Technologies" course at the University of Toronto.</p>
				<p>This is my first mobile website created as a final project for this course. The main goal of this site is demonstrating 20 mobile web features that I have learned and getting my next contract as a Mobile Web Developer.</p>
			</div>
			<h2>20 mobile web features</h2>
			<ol id="features">
				<li>
					<a href="contact.php">Making a Phone Call</a>
					<p>This page demonstrates using "tel:" i-Mode format to make a phone call by clicking a link on a web page (works only for phone-enabled devices).</p>
				</li>
				<li class="even">
					<a href="contact.php">Sending Email</a>
					<p>The page demonstrates using "mailto:" protocol for sending email. Works for mobile phones and modern devices with browsers having mail applications that can react to classic "mailto:" protocol.</p>
				</li>
				<li>
					<a href="contact.php">Sending an SMS</a>
					<p>The page demonstrates using "sms:" protocol for sending SMS.</p>
				</li>
				<li class="even">
					<span>Conditional Media Queries</span>
					<p>Every page of this website uses conditional media queries which include conditions about the screen size and media attribute values allowed. Currently, Media queries work for Safari, Android browser, Symbiam/S60 from 5-th edition, Nokia Series 40 from 6-th edition, webOS, Opera Mobile, Opera Mini.</p>
				</li>
				<li>
					<span>Using reset.css</span>
					<p>For this site, truncated version of reset.css is used as a start part of <a href="http://m.janetkulyk.com/css/basic.css" class="inline">basic.css</a> file, used on every page.</p>
				</li>
				<li class="even">
					<span>Use of Pseudo-classes</span>
					<p>Pseudo-classes are used for every link on this mobile website excluding navigation links, 
						<br/><strong>a:link</strong> works for every browser, 
						<br/><strong>a:visited</strong> works for Safari, Nokia Series 40, IE, Motorola I.B., Opera (Mobile and Mini), 
						<br/><strong>a:focus</strong> works for IE and partilayy for Safari, 
						<br/><strong>a:active</strong> works for Safari, NetFront, IE, and Motorola I.B., 
						<br/><strong>a: hover</strong> works for Android browser, Symbian/S60, Nokia Series 40 from 6-th edition, and Opera (Mobile and Mini)
					</p>
				</li>
				<li>
					<a href="json-parsing.php">JavaScript for Mobile Browsers: Standard Dialogs</a>
					<p>JavaScript supports a list of standard dialogs. This page shows alert() standard dialog after clicking on any of test buttons. Works on all browsers.</p>
				</li>
				<li class="even">
					<a href="window-screen.php">JavaScript for Mobile Browsers: Screen &amp; Viewport Properties</a>
					<p>This page displays screen size, available screen size and viewport size of a window for your browser. Screen size is supported by major browsers (excluding Nokia Series 40 before 6-th edition and Blackberry before 4.6). Viewport size of a window is supported by all major browsers excluding Nokia before 6-th edition, BlackBerry, NetFront, InternetExplorer.</p>
				</li>
				<li>
					<span>Coding JavaScript for Mobile Browsers: History</span>
					<p>This feature is implemented in the footer of every page, "Back" link.</p>
				</li>
				<li class="even">
					<a href="ajax-support.php">AJAX Support Test, JavaScript Standard Dialogs</a>
					<p>AJAX support varies from device to device. The page represents AJAX support test.</p>
					<p>XMLHTTPRequest is supported by Safari, Android browser, Symbian/S60 since 3-d edition, Nokia Series 40 starting with 6-th edition, webOS, BlackBerry after version 4.6, NetFront starting version 3.5, IE starting Windows Mobile 5, Opera Mobile starting version 8.0, and Opera Mini starting version 3.0.</p>
				</li>
				<li>
					<a href="json-parsing.php">AJAX Support: JSON Parsing Support Test</a>
					<p>AJAX support varies from device to device. The page represents JSON Parsing Support test.</p>
				</li>
				<li class="even">
					<a href="geolocation.php">Detecting the Location: W3C Geolocation API</a>
					<p>This page allows to find the latitude and longitude for your current location based on W3C Geolocation API (status "Candidate Recomendation". Works for major mobile browsers including Safari, BlackBerry, and Android browsers. </p>
				</li>
				<li>
					<a href="google-maps.php">Using Google Maps: Google Maps API v3 &amp; GoogleMaps Static API</a>
					<p>This page will deliver Google Map API v3 for Safari on iOS (for iPad, iPhone, iPod Touch), Android browser and Google Chrome browser on desktop and Google Maps Static API for other browsers.</p>
				</li>
				<li class="even">
					<span>Using Ordered Lists with Access Keys</span>
					<p>Accesskeys enable a user to navigate a site using keyboard shortcuts, improving both the usability and accessibility of the site.</p>
					<p>Accesskeys are used on every page of this site for top and bottom navigation lists.</p>
				</li>
				<li>
					<a href="marquee.php">Use of Marquee</a>
					<p>Based on my tests, HTML marquee tag works fine on all tested browsers excluding Opera Mini; -wap-marquee WCSS extension works fine on Opera Mobile on  Android and on Opera emulator.</p>
				</li>
				<li class="even">
					<a href="border-images.php">Using Border Images</a>
					<p>The page demonstrates using border images for mobile web. Safari, Android, webOS, and partially Symbian/S60 support this feature (as at time of writing, April 20, 2012).</p>
				</li>
				<li>
					<a href="stroke-fill.php">Using Text Stroke and Fill</a>
					<p>This page demonstrates using Text Stroke and Fill WebKit Extensions. Works for WebKit browsers: Safari, Android browser, Google Chrome. <strong>text-fill-color</strong> works on webOS and Symbian/S60 from 5-th edition.</p>
				</li>
				<li class="even">
					<a href="gradients.php">CSS3 Gradients</a>
					<p>CSS3 gradients are supported in WebKit browsers (Safari, Android, Google Chrome) with prefix.</p>
				</li>
				<li>
					<a href="reflections-masked.php">CSS3: Reflection Effects, Masked Images</a>
					<p>Reflection effects (box-reflect) and masked images are supported in WebKit browsers (Safari, Android, Google Chrome) with prefix.</p>
				</li>
				<li class="even">
					<a href="animation.php">CSS3: Animation</a>
					<p>CSS3 animations are supported in WebKit browsers.</p>
				</li>
				
			</ol>
		</div>
		<div id="footer">
			<ol>
				<li><a href="#" onclick="history.back()" accesskey="4">Back</a></li>
				<li><a href="#" onclick="document.documentelement.scrolltop" accesskey="5">to Top</a></li>
				<li><a href="http://www.janetkulyk.com/" accesskey="6">Desktop site</a></li>
			</ol>
			<span>&#169; 2012. All Rights Reserved</span>
		</div>
	</body>
</html> 