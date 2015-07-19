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
		<title>Janet Kulyk Website - Use of Marquee</title>
		<link type="text/css" rel="stylesheet" media="screen" href="css/basic.css" />
		<!--[if !IE]>-->
			<link type="text/css" rel="stylesheet" media="(max-device-width: 240px) and (max-device-height: 320px)" href="css/midend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 320px) and (max-device-width: 960px)" href="css/highend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 961px)" href="css/desktop.css" />
		<!--<![endif]-->
		<style type="text/css"> 
			.wap_marquee {
				display: -wap-marquee; 
				-wap-marquee-dir: rtl; 
				-wap-marquee-speed: medium; 
				-wap-marquee-loop: 3; 
				-wap-marquee-style: slide;
			}
			marquee {
				color: #cf4f15;
				font-weight: bold;
			}
			.wap_marquee h3, 
			.wap_marquee h4 {
				padding: 0.3em 1.0em 0 1.0em;
				text-align: center;
			}
			.wap_marquee h4, 
			.desc {
				color: #69690a;
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
			<h2>Use of Marquee</h2>
			<div class="wap_marquee">
				<h3>LEARN MOBILE WEB!!!</h3>
				<h4>This is a text with display:-wap-marquee</h4>
			</div>
			<marquee>Hurry UP! The market is hot!</marquee> 
			<marquee class="desc">This is a text with the marquee tag</marquee>
			<p>Based on my tests, HTML marquee tag works fine on all tested browsers excluding Opera Mini; -wap-marquee WCSS extension works fine on Opera Mobile on  Android and on Opera emulator.</p>
		</div>
	</body>
</html>