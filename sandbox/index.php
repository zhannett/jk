<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();	
	$page_title='Janet (Zhanna) Kulyk\'s Web Site - Front-End development, Web Development Services - Toronto, Canada; WebDev References; Fun'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, web developer, front-end engineer, UI developer, frontend, web performance, Toronto, Ontario, Canada'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, front-end engineering. WebDev References, Fun pages';
	$page_css = 'css/prod/modal.css';
	$thickbox = '';	
	$google_site_verification = '<meta name="google-site-verification" content="mA36N0CD7ALdTKHKR-ShMKKlwH8qDLEjWxwzbV47UnU" />';
	include("inc/header_new.inc.php");
?>

	<div class="yui-b">
		<div class="browser"></div>
		<?php include("inc/w3c.inc") ?>			
		<div id="flower"></div>
	</div>
	
	<div id="yui-main">
		<div class="yui-b">				
			<div class="yui-ge">
				
				<div class="yui-u first">					
					<div id="welcome" class="mod resizable cssParsedBox">						
						<div class="hd">
							<h1 class="hidden_seo">Janet (Zhanna) Kulyk's Web Site - Web Development Services</h1>
							<h2>Welcome!</h2>
						</div>	
						<div class="bd">													
							<div id="welcome_img" class="first">
								<img src="img/me.png" alt="My Photo" width="300" height="225" />
							</div>																					
							<div class="promo">
								<p>My name is Janet (Zhanna) Kulyk, I am a Web Developer. I build web interfaces for applications for large corporations as a Front-End Developer and web sites for small businesses and individuals as a one-person web agency.</p>
								<p>My current focus is front-end design and development, user experience, web standards, cross-browser and cross-platform development.</p>
								<p>My professional profile can be found on LinkedIn: </p>
								<span class="inline_linkedin"><a href="http://www.linkedin.com/in/janetkulyk" title="Professional Profile on LinkedIn">www.linkedin.com/in/janetkulyk</a>.</span>
								<p>This web site highlights some of my professional skills, contains reference materials and links, has some fun pages, and serves as a sandbox for playing with new code.</p>
							</div>
						</div>
					</div>
				</div><!-- EOF main content -->			
			<div class="yui-u">						
				<div id="quot1" class="resizable">
					<blockquote>
						<div class="quot">&quot;Be yourself, everyone else is already taken.&quot;</div>
						<div class="author">&mdash; Oscar Wilde</div>
					</blockquote>
				</div>				
				<div id="quot2" class="resizable">
					<blockquote>
						<div class="quot">&quot;The greatest glory is not in never failing, but in rising up every time we fall.&quot;</div>
						<div class="author">&mdash; Confucius,<br/>551 BC – 479 BC</div>
					</blockquote>
				</div>					
			</div>
			
	</div><!-- EOF unit-first -->		
		
					
		</div> <!--EOF grid ge -->
		<div class="latest_projects clearfix">
			<h5 class="title_latest_projects">Latest Projects</h5>
			<div class="title_jwplayer">
				<a href="jwplayer2/" class="modal"><img src="img/logo_pialaw.gif" alt="logo www.pialaw.ca" /></a>
				<a href="jwplayer2/" class="modal"><p title="Image rotator with built-in video implemented with in HTML5 with fallback to Flash player if HTML5 video tag is not supported">Image rotator with built-in video implemented with in HTML5 with fallback to Flash player if HTML5 video tag is not supported; this player is implemented on</a> <a href="http://www.pialaw.ca" class="link">www.pialaw.ca</a></p>.
			</div>
			<div class="title_my_mobile">
				<a href="http://m.janetkulyk.com" target="_blank">
					<img src="img/qr-jk-mobile.png" alt="QRCode" />
					<p>My personal web mobile site; works on all mobile browsers including ancient ones <a href="mobile/" class="link">m.janetkulyk.com</a></p>.
				</a>
			</div>
			<div class="title_css3_demo">
				<a href="kinetic-typography-video/" target="_blank"><img src="img/ad_css3_125x125.png" alt="" style="width: 145px; display: inline-block; vertical-align: top;" /></a>
			</div>
		</div>
		<div id="cols">		
				<div class="col fir">
					<h5>You wish to hire me</h5>
					<ul>
						<li><a href="portfolio.php">Portfolio</a></li>
						<li><a href="skills.php">Skills</a></li>
						<li><a href="education.php">Education</a></li>
					</ul>							
				</div>													
				<div class="col mid">
					<h5>You are a fellow developer</h5>
					<ul>
						<li><a href="links.php">WebDev Links</a></li>
						<li><a href="forum.php">Forum</a></li>
					</ul>
				</div>	
				<div class="col mid">
					<h5>You are my friend</h5>
					<ul>
						<li><a href="photogalleries.php">Photogalleries</a></li>
						<li><a href="forum.php">Forum</a></li>
						<li><a href="game.php">Game</a></li>
					</ul>
				</div>													
				<div class="col mid">
					<h5>Highly Recommended</h5>
					<a href="http://www.manning.com/resig/" title="Secrets of the JavaScript Ninja"><img src="img/secrets_of_JS_ninja.jpg" width="125" height="156" alt="Secrets of the JavaScript Ninja" /><br/>Secrets of the JavaScript Ninja</a>			
					<!-- <p>The untold secrets of the elite JavaScript programmers distilled for intermediate JavaScript programmers, bringing them completely up to speed with the challenges of modern JavaScript development. Explores specific techniques, strategies, and solutions to developing robust, cross-browser, JavaScript code.</p> -->
				</div>
				<div class="col last">
					<!--<h5>Web World News</h5><div id="news-feed"></div>-->
					<!--<a href="kinetic-typography-video-overlay/" class="modal"><img src="img/ad_css3_125x125.png" alt="" /></a>-->
					<!--<a href="jwplayer2/" class="modal"><img src="img/ad_css3_125x125.png" alt="" /></a>-->
				</div>
			</div><!-- EOF 3 boxes -->
			
		
	</div><!--EOF block -->
</div><!--EOF main -->
		<?php include("inc/footer_new.inc.php"); ?>
		<script src="js/prod/modal.js"></script>
		<!--<script src="build/js/concat-min.js"></script>-->
		<?php include("inc/ga.php"); ?>
	</body>
</html>