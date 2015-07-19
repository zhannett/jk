<?php 
	header('Content-Type: text/html');
	header('Content-Type: application/xhtml+xml');
	Header("Cache-Control: must-revalidate");
	//$offset = 60 * 60 * 24 * 3;
	//$offset = 1;
	Header("Expires: " . gmdate("D, d M Y H:i:s", time() + 1) . " GMT");
	header('Content-type: text/html; charset=utf-8'); 
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
"http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<meta name="HandheldFriendly" content="True" /> <!-- BB  -->
		<meta name="MobileOptimized" content="width" /> <!-- mobile IE -->
		<meta http-equiv="cleartype" content="on" /> <!-- mobile IE -->
		<title>Janet Kulyk Website!</title>
		<link type="text/css" rel="stylesheet" media="screen" href="css/basic.css" />
		<!--[if !IE]>-->
			<link type="text/css" rel="stylesheet" media="(max-device-width: 176px) and (max-device-height: 220px)" href="css/midend1.css" />
			<link type="text/css" rel="stylesheet" media="(max-device-width: 128px) and (max-device-height: 160px)" href="css/lowend.css" />
			<link type="text/css" rel="stylesheet" media="screen and (device-width: 240px) and (device-height: 320px)" href="css/midend2.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 320px) and (max-device-width: 960px)" href="css/highend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 961px)" href="css/desktop.css" />
		<!--<![endif]-->
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="icon" type="image/png" href="favicon.png" />
		<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png" />
	</head> 
	<body> 
		<div id="header">
			<a name="top"></a>
			<h1>m.janetkulyk.com</h1>
		</div>
		<ol id="nav">
			<li><a href="mainmenu.html" accesskey="1">Main menu</a></li>
			<li><a href="setup.html" accesskey="2">Set up</a></li>
			<li><a href="contact.html" accesskey="3">Contact Me</a></li>
		</ol>
		<div id="content">
			<h2>Welcome!</h2>
			<p>My name is Janet. I am a Web Developer.</p>
			<p>My interest to mobile technologies pushed me to take  "Foundations of Mobile Business Technologies" course at the Unoversity of Toronto.</p>
			<p>This is my first mobile website created as a final project for this course. The main goal of this site is demonstrating 20 mobile web features that I have learned and getting my next contract as a Mobile Web Developer.</p>
			<p>Desktop version of the website: <a href="http://www.janetkulyk.com">www.janetkulyk.com</a></p>
			<h2>20 mobile web features</h2>
			<ol id="features">
				<li accesskey="4">Conditional media Queries, every page (Safari, Android browser, Symbiam/S60 from 5-th edition, Nokia Series 40 from 6-th edition, webOS, Opera Mobile, Opera Mini)</li>
				<li><a href="geolocation.php" accesskey="5">Using geolocation and error handling</a></li>
				<li><a href="geolocation.php" accesskey="6">Use of appropriate Google Map</a> (based on detected user-agent of the client, a Google Map API&nbsp;v3 is delivered if the request came from Safari on iOS or Android, and Google Maps static API is delivered if the request came from any other device).</li>
				<li><a href="index.php" accesskey="7">Using ordered lists with access keys</a> (Home page + navigation on every page) - for following browsers ...</li>
				<li accesskey="8">Using favicon (works on Safari, Android browser, BlackBerry [some devices, in the title area], Opera Mobile and Opera Mini (title and bookmarks)</li>
				<li><a href="index.php" accesskey="9">Use of pseudo-classes - for every link on the website excluding navigation links, a:link - for every browser, a:visited, a:focus, a:active, a: hoevr - for compatible browsers</a></li>
				<li><a href="border-images.php" accesskey="10">Using border images</a></li>
				<li><a href="contact.php" accesskey="11">Making a Phone Call</a></li>
				<li><a href="contact.php" accesskey="12">Sending email</a></li>
				<li><a href="contact.php" accesskey="13">Sending an SMS</a></li>
				<li><a href="marquee.php" accesskey="14">Use of marquee</a> (HTML marquee tag works fine on all tested browsers excluding Opera Mini; -wap-marquee works fine on Opera Mobile on  Android and on Opera simulator)</li>
				<li accesskey="15">Using reset.css; reset.css is used as a start part of basic.css file (see the code at http://m.janetkulyk.com/css/basic.css).</li>
				<li accesskey="16">Using browser-specific meta tags (every page)</li>
				<li accesskey="17">Viewport: fixed size (every page)</li>
				<li accesskey="18">Coding JavaScript for Mobile Browsers: History (footer with "Back" link , every page)</li>
				<li><a href="ajax-support.php" accesskey="19">AJAX Support Test, JavaScript Standard Dialogs</a> If AJAX is supported, we'll get some text; if there is no support for AJAX, we'll get "alert" JavaScript standard dialog</li>
				<li><a href="json-parsing.php" accesskey="20">AJAX Support: JSON Parsing Test, JavaScript Standard Dialogs</a>(alert)</li>
				<li><a href="webkit-css-extensions.php" accesskey="22">Webkit CSS Extensions (gradients, reflection effects, masked image)</a>, works on WebKit browsers (Android browser, Safari)</li>
				
				
				<li accesskey="21">Using sprites</li>
				
				<li><a href="index.php" accesskey="23">Using text overflow with elipsis (unit, p.17)</a></li>
				
			</ol>
		</div>
		<div id="footer">
			<ol>
				<li><a href="index.html" accesskey="24">Home</a></li>
				<li><button onclick="history.back()">Back</button></li>
				<li><a href="#top" accesskey="26">Go toTop</a></li>
			</ol>
			&#169; 2012. All Rights Reserved 
		</div>
	</body>
</html> 