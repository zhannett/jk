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
		<title>Janet Kulyk Website - Screen &amp; Viewport Properties</title>
		<link type="text/css" rel="stylesheet" media="screen" href="css/basic.css" />
		<!--[if !IE]>-->
			<link type="text/css" rel="stylesheet" media="(max-device-width: 240px) and (max-device-height: 320px)" href="css/midend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 320px) and (max-device-width: 960px)" href="css/highend.css" />
			<link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 961px)" href="css/desktop.css" />
		<!--<![endif]-->
		<style type="text/css">
			p span {
				color: #f34200;
				font-weight: bold;
			}
			p.res {
				width: 90%;
				border: 0.07em solid #f34200;
				padding: 0.5em 0.5em 0.5em 1.0em;
				margin: 1.0em auto;
			}
			ul li {
				line-height: 1.5em;
				padding: 0.5em;
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
			<h2>JavaScript for Mobile Browsers: Screen &amp; Viewport Properties</h2>
			<div class="center">
				<p class="res">
					Screen size is <span id="screenWidth"></span>&#32;*&#32;<span id="screenHeight"></span>.<br/>
					Available screen size is <span id="availWidth"></span>&#32;*&#32;<span id="availHeight"></span>.<br/>
					The viewport size of a window is <span id="viewportWidth"></span>&#32;*&#32;<span id="viewportHeight"></span>.<br/>
				</p>
				<p>The <strong>viewport</strong> is the portion of the browser that actually displays document content: it excludes browser "chrome" such as menus, toolbars, and tabs.</p>
				<p>Document coordinates are more fundamental than viewport coordinates, and they do not change when the user scrolls.</p>
				<p>The <strong>screen</strong> property of a Window refers to a Screen object. The properties of this global object contain information about the coputer monitor/ mobile screen on which the browser is displayed. JavaScript programs can use this information to optimize their output for the user's display capabilities.</p>
				<ul>
					<li><strong>width</strong> Specifies the total width, in pixels, of the screen on which the web browser is displayed.</li>
					<li><strong>height</strong> Specifies the total width, in pixels, of the screen on which the web browser is displayed.</li>
					<li><strong>availWidth</strong> Specifies the available width, in pixels, of the screen on which the web browser is displayed. This available width does not include horizontal space allocated to permanent desktop features.</li>
					<li><strong>availHeight</strong> Specifies the available height, in pixels, of the screen on which the web browser is displayed. This available height does not include vertical space allocated to permanent desktop features.</li>
				</ul>
				
			</div>
		</div>
		<?php include('inc/footer.inc.php'); ?>
		<script type="text/javascript">
			var viewportWidth = document.documentElement.clientWidth,
				viewportHeight = document.documentElement.clientHeight,
				screenWidth = window.screen.width
				screenHeight = window.screen.height;
				availWidth = screen.availWidth,
				availHeight = screen.availHeight;
			document.getElementById('viewportWidth').innerHTML = viewportWidth + 'px';
			document.getElementById('viewportHeight').innerHTML = viewportHeight + 'px';
			document.getElementById('screenWidth').innerHTML = screenWidth + 'px';
			document.getElementById('screenHeight').innerHTML = screenHeight + 'px';
			document.getElementById('availWidth').innerHTML = availWidth + 'px';
			document.getElementById('availHeight').innerHTML = availHeight + 'px';
		</script>
	</body>
</html>