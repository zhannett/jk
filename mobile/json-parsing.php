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
		<title>Janet Kulyk Website - AJAX Support: JSON Parsing Test</title>
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
			<li><a href="about.php" class="navlink" accesskey="2">About</a></li>
			<li><a href="contact.php" class="navlink" accesskey="3">Contact Me</a></li>
		</ol>
		<div id="content">
			<h2>AJAX Support: JSON Parsing Support Test</h2>
			<button type="button" onclick="ajax1()">eval() with strict JSON ("strict" standard)</button>
			<button type="button" value="" onclick="ajax2()">eval() with non-strict JSON ("de facto" standard)</button>
			<p>JavaScript supports a list of standard dialogs. This page shows alert() standard dialog after clicking on any of test buttons. Works on all browsers.</p>
		</div>
		<?php include('inc/footer.inc.php'); ?>
		<script type="text/javascript">
			function ajax1() {
				try {
					var object = eval("(" + "{'name': 'Janet'}" + ")");
					if (object.name === "Janet") {
						alert("Working");	
					} else {
						alert("Not working");				
					}
				} catch (e) {
					alert("Not working");
				}
			}
			function ajax2() {
				try {
					var object = eval("(" + "{name: 'Janet'}" + ")");
					if (object.name=="Janet") {
						alert("Working");	
					} else {
						alert("Not working");				
					}
				} catch (e) {
					alert("Not working");
				}
			}
		</script>
	</body>
</html>