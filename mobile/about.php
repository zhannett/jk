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
		<title>Janet Kulyk Website - About</title>
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
			button {
				margin: 20px;
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
			<li><a href="about.php" accesskey="2" class="highlighted">About</a></li>
			<li><a href="contact.php" class="navlink" accesskey="3">Contact Me</a></li>
		</ol>
		<div id="content">
			<h2>About</h2>
			<p>The content for this page is supposed to be written shortly. I am going to put some information about my professional interests, current projects and plans here.</p>
		</div>
		<?php include('inc/footer.inc.php'); ?>
	</body>
</html>