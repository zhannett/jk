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
		<title>Janet Kulyk Website - Using Border Images</title>
		<link type="text/css" rel="stylesheet" media="screen" href="css/basic.css" />
		<!--[if !IE]>-->
			<link type="text/css" rel="stylesheet" media="(max-device-width: 240px) and (max-device-height: 320px)" href="css/midend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 320px) and (max-device-width: 960px)" href="css/highend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 961px)" href="css/desktop.css" />
		<!--<![endif]-->
		<style type="text/css">
			.demo {
				width: 80%;
				margin: 1.0em auto;
			}
			h3 {
				width: 85%;
			   -webkit-border-image: url('img/border2.png') 30 40 30 40 stretch;
			   border-width: 0.4em;
			   padding: 35px;
			   margin: 0.65em auto;
			   color: #f34200;
			   text-align: center;
			}
			.bordered {
				width: 75%;
				text-align: center;
			   -webkit-border-image: url('img/border2.png') 50 50 50 50 round round;	
			   border-width: 10px;
			   padding: 15px 10px;
			   margin: 10px auto;
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
			<h2>Using Border Images</h2>
			<div class="demo">
				<h3>Using Border Images</h3>
				<div class="bordered">
					This page demonstrates using border images for mobile web.
					Safari, Android, webOS, and partially Symbian/S60 support this feature (as at time of writing, April 20, 2012).
				</div>
			</div>
			<p>The page demonstrates using border images for mobile web. Safari, Android, webOS, and partially Symbian/S60 support this feature (as at time of writing, April 20, 2012).</p>
		</div>
		<?php include('inc/footer.inc.php'); ?>
	</body>
</html>