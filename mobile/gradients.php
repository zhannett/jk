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
		<title>Janet Kulyk Website - CSS3 Gradients</title>
		<link type="text/css" rel="stylesheet" media="screen" href="css/basic.css" />
		<!--[if !IE]>-->
			<link type="text/css" rel="stylesheet" media="(max-device-width: 240px) and (max-device-height: 320px)" href="css/midend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 320px) and (max-device-width: 960px)" href="css/highend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 961px)" href="css/desktop.css" />
		<!--<![endif]-->
		<style type="text/css">
			#gradientLin,
			#gradientRad {
				width: 12.5em;
				height: 12.5em;
				margin: 1.2em;
				border: 0.05em solid #ccc;
			}
			#gradientLin {
				background: -webkit-gradient(linear, center top, center bottom, from(#f3b500), to(#f34200));
				margin: 0.5em auto;
			}
			#gradientRad {
				background: -webkit-gradient(radial, 100% -10, 50, 70% 0, 200, from(#f3b500), to(#f34200)) white;
				margin: 0.5em auto;
			}
			h3 {
				text-align: center;
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
			<h2>CSS3 Gradients</h2>
			<h3>Linear Gradient</h3>
			<div id="gradientLin"></div>
			<h3>Radial Gradient</h3>
			<div id="gradientRad"></div>
			<p>CSS3 gradients are supported in WebKit browsers (Safari, Android, Google Chrome) with prefix.</p>
		</div>
		<?php include('inc/footer.inc.php'); ?>
	</body>
</html>