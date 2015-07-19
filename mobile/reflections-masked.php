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
		<title>Janet Kulyk Website - CSS3: Reflection Effects, Masked Images</title>
		<link type="text/css" rel="stylesheet" media="screen" href="css/basic.css" />
		<!--[if !IE]>-->
			<link type="text/css" rel="stylesheet" media="(max-device-width: 240px) and (max-device-height: 320px)" href="css/midend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 320px) and (max-device-width: 960px)" href="css/highend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 961px)" href="css/desktop.css" />
		<!--<![endif]-->
		<style type="text/css">
			#content {
				text-align: center;
			}
			h3 {
				-webkit-box-reflect: below 0.1em;
				padding: 1.0em 0;
				font-size: x-large;
			}
			h4 {
				-webkit-box-reflect: below 3px -webkit-gradient(linear, left top, left bottom, from(transparent), to(white));
				color: #fff;
				padding: 0.7em 0;
				font-size: x-large;
			}
			#reflection,
			#complex,
			#masked {
				width: 12.5em;
				height: 12.5em;
				margin: 1.2em auto;
			}
			#reflection {
				background-color: yellow;
			}
			#complex {
				background-color: #000;
			}
			.masked {
				-webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)));
			}
			p {
				text-align: left;
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
			<h2>CSS3: Reflection Effects, Masked Images</h2>
			<strong class="center">CSS3: Reflection effect</strong>
			<div id="reflection"><h3>Now with added CSS3!</h3></div>
			<strong class="center">CSS3: Reflection effect + Gradient</strong>
			<div id="complex"><h4>Now with added CSS3!</h4></div>
			<strong class="center">CSS3: Masked Image</strong>
			<div id="masked"><img src="img/masked.png" width="200" height="200" alt="" class="masked" /></div>
			<p>Reflection effects (box-reflect) and masked images are supported in WebKit browsers (Safari, Android, Google Chrome) with prefix.</p>
		</div>
		<?php include('inc/footer.inc.php'); ?>
	</body>
</html>