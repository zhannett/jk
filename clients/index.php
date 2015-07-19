<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();	
	$page_title='Janet (Zhanna) Kulyk\'s Web Site - Web / Mobile Development Services - Toronto, Canada'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, Жанна Кулик, web / mobile developer, HTML5, CSS3, JavaScript, jQuery, PHP, MySQL, performance, UI developer, frontend, web performance, Toronto, Ontario, Canada'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd., web / mobile development, design, front-end engineering';
	$media = 'http://74fc8dbd1b965de1c679-6efcb597f6004a0f0ebadc4fc23e6156.r82.cf1.rackcdn.com';
	$google_site_verification = '<meta name="google-site-verification" content="mA36N0CD7ALdTKHKR-ShMKKlwH8qDLEjWxwzbV47UnU" />';
	include("inc/header_new.inc.php");
?>
		<?php /*<section id="mainContent" role="main"> */ ?>
		<div class="aside_left">
			<?php include("inc/w3c.inc") ?>
		</div>
		
		<div id="mainSection">
			<div class="main_content welcome">
				<h1 class="visuallyhidden">Janet (Zhanna) Kulyk's Web Site - Web Development Services</h1>
				<h1 class="h1_home">Welcome!</h1>
				<article>													
					<figure>
						<!--<img src="http://74fc8dbd1b965de1c679-6efcb597f6004a0f0ebadc4fc23e6156.r82.cf1.rackcdn.com/me.jpg" alt="My Photo" width="305" height="229" align="left" />-->
						<img src="img/me3.png" width="216" height=228" alt="My Photo" align="left" />
					</figure>
					<div class="promo">
						<p class="pres grey1">Hi.</p>
						<p class="pres grey2">I'm Janet Kulyk.</p>
						<p class="pres grey3">I'm a web developer.</p>
						<p>I build web application interfaces for large corporations as a Front-End Developer and web / mobile sites and web applications for small businesses and individuals as a one-person web agency.</p>
						<p>My current focus is user interface design and development for web and mobile browsers, performance, web standards, user experience, accessibility, cross-browser and cross-platform development.</p>
						
						<p>This web site highlights some of my professional skills, contains reference materials and links, has some fun pages, and serves as a sandbox for playing with new code.</p>
					</div>
				</article>
			</div>
			<div class="latest_projects" data-behavior="modal">
				<h2>Latest Public Projects</h2>
				<article id="jwplayerdemo" class="title_jwplayer">
					<a href="demo_jwplayer/index.php" class="modal"><img src="http://74fc8dbd1b965de1c679-6efcb597f6004a0f0ebadc4fc23e6156.r82.cf1.rackcdn.com/logo_pialaw.png" width="100" height="100" alt="logo www.pialaw.ca" align="left" /></a>
					Image rotator with built-in video: HTML5 &lt;video&gt; with fallback to Flash player: <a href="http://www.pialaw.ca" class="link">www.pialaw.ca</a>.
				</article>
				<article class="title_my_mobile">
					<img src="https://d4817b8b872442fa24da-6efcb597f6004a0f0ebadc4fc23e6156.ssl.cf1.rackcdn.com/qr-jk-mobile.png" width="100" height="100" alt="QRCode" align="left" />
					My personal web mobile site; works on all mobile browsers including ancient ones <a href="mobile/" class="link" target="_blank">m.janetkulyk.com</a>.
				</article>
			</div>
			<div class="cols">
				<div class="col">
					<h3>You wish to hire me</h3>
					<ul>
						<li><a href="portfolio.php">Portfolio</a></li>
						<li><a href="skills.php">Skills</a></li>
						<li><a href="education.php">Education</a></li>
					</ul>							
				</div>													
				<div class="col">
					<h3>You are a fellow developer</h3>
					<ul>
						<li><a href="links.php">WebDev Links</a></li>
					</ul>
				</div>	
				<div class="col">
					<h3>You are my friend</h3>
					<ul>
						<li><a href="photogalleries.php">Photogalleries</a></li>
						<li><a href="game.php">Game</a></li>
					</ul>
				</div>
						
				<div class="col">
					<h3>Recommended</h3>
					<a href="http://www.manning.com/resig/" title="Secrets of the JavaScript Ninja"><img src="<?php echo $media ?>//secrets_of_JS_ninja.jpg" width="125" height="156" alt="Secrets of the JavaScript Ninja" /><br/>Secrets of the JavaScript Ninja</a>			
					<!-- <p>The untold secrets of the elite JavaScript programmers distilled for intermediate JavaScript programmers, bringing them completely up to speed with the challenges of modern JavaScript development. Explores specific techniques, strategies, and solutions to developing robust, cross-browser, JavaScript code.</p> -->
				</div><?php /*
				<div class="col last">
					<!--<h5>Web World News</h5><div id="news-feed"></div>-->
				</div>
				
				</div><!--EOF main section -->*/?>
			</div>
		</div>
	
		<div class="aside_right">
			<aside>
				<div class="quot">
					<blockquote>
						Be yourself, everyone else is already taken.
						<cite>Oscar Wilde</cite>
					</blockquote>
				</div>				
				<div class="quot">
					<blockquote>
						The greatest glory is not in never failing, but in rising up every time we fall.
						<cite>Confucius,<br/>551 BC – 479 BC</cite>
					</blockquote>
				</div>
				<div class="title_css3_demo">
					<a href="http://www.janetkulyk.com/kinetic-typography-video/" target="_blank"><img src="<?php echo $media ?>/ad_css3_125x125.png"  width="125" height="125" alt="" style="width: 145px; display: inline-block; vertical-align: top;" /></a>
				</div>
			</aside>
		</div>
		<?php include("inc/footer_new.inc.php"); ?>
		<?php include("inc/ga.php"); ?>
	</body>
</html>