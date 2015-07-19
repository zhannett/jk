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
		<title>Janet Kulyk Website - AJAX Support Test</title>
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
				margin: 30px auto;
			}
			#result {
				width: 50%;
				color: #cf4f15;
				padding: 10px;
				border: 3px solid #cf4f15;
				margin: 0 auto 30px auto;
				font-weight: bold;
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
			<h2>AJAX Support Test</h2>
			<button type="button" onclick="ajax1()">Load AJAX text</button>
			<div id="result"></div>
			<p>AJAX support varies from device to device. The page represents AJAX support test.</p>
			<p>XMLHTTPRequest is supported by Safari, Android browser, Symbian/S60 since 3-d edition, Nokia Series 40 starting with 6-th edition, webOS, BlackBerry after version 4.6, NetFront starting version 3.5, IE starting Windows Mobile 5, Opera Mobile starting version 8.0, and Opera Mini starting version 3.0.</p>
			<p>If AJAX is supported, we'll get some text; if there is no support for AJAX, we'll get "alert" JavaScript standard dialog</p>
		</div>
		<?php include('inc/footer.inc.php'); ?>
		<script type="text/javascript">
			var ajax;
			function showText() {
				if ((ajax.readyState === 4) &amp;&amp; (ajax.status === 200)) {
					document.getElementById("result").innerHTML = ajax.responseText;							 
				}
			}
			function createXMLHttpRequest() {
			   try { return new XMLHttpRequest(); } catch(e) {}
			   try { return new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {}
			   alert("AJAX not supported");
			   return null;
			 }
			function ajax1() {
				ajax = createXMLHttpRequest();
				ajax.open("get", "test.txt", true);
				ajax.onreadystatechange = showText;
				ajax.send(null);
			}
			
		</script>
	</body>
</html>