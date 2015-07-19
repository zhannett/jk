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
		<title>Janet Kulyk Website - CSS3: Animation</title>
		<link type="text/css" rel="stylesheet" media="screen" href="css/basic.css" />
		<!--[if !IE]>-->
			<link type="text/css" rel="stylesheet" media="(max-device-width: 176px) and (max-device-height: 220px)" href="css/lowend.css" />
			<link type="text/css" rel="stylesheet" media="screen and (device-width: 240px) and (device-height: 320px)" href="css/midend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 320px) and (max-device-width: 960px)" href="css/highend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 961px)" href="css/desktop.css" />
		<!--<![endif]-->
		<style type="text/css">
			#content {
				text-align: center;
				height: 27.0em;
			}
			@-webkit-keyframes 'expand' {
				0% {
					border-width: 0.2em;
				}
				50% {
					border-width: 10.0em;
				}
				100% {
					border-width: 0.2em;
					width: 18.0em;;
				}
			}
			#box {
				width: 6.0em;
				height: 6.0em;
				margin: 25px auto;
				background: #f34200;
				border: 4px solid #005A9C;
				box-sizing: border-box;
				-webkit-animation: 'expand' 6s ease 0 infinite alternate;
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
			<h2>CSS3: Animation</h2>
			<p>CSS3 animations are supported in WebKit browsers.</p>
			<div id="box"></div>
		</div>
		<?php include('inc/footer.inc.php'); ?>
	</body>
</html>