<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();	
	$page_title='Janet (Zhanna) Kulyk\'s Web Site - Web / Mobile Development Services - Toronto, Canada'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, Жанна Кулик, web / mobile developer, HTML5, CSS3, JavaScript, jQuery, PHP, MySQL, performance, UI developer, frontend, web performance, Toronto, Ontario, Canada'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd., web / mobile development, design, front-end engineering';
	$media = 'http://janetkulyk.s3.amazonaws.com/img/';
	$google_site_verification = '<meta name="google-site-verification" content="mA36N0CD7ALdTKHKR-ShMKKlwH8qDLEjWxwzbV47UnU" />';
	include("inc/header_new.inc.php");
?>
		<?php /*<section id="mainContent" role="main"> */ ?>
		<div class="aside_left">
			<?php include("inc/w3c.inc") ?>
		</div>
		<div class="main_section">
			<div class="main_content welcome">
				<h1 class="visuallyhidden">Janet (Zhanna) Kulyk's Web Site - Web Development Services</h1>
				<h1 class="h1_home">Welcome!</h1>
				<article>													
					<figure>
						<img src="<?php echo $media ?>me3.png" alt="Janet's Photo Photo" />
					</figure>
					<div class="promo">
						<p class="pres grey1">Hi.</p>
						<p class="pres grey2">I'm Janet Kulyk.</p>
						<p class="pres grey3">I'm a web developer.</p>
						<p>I build web application interfaces for large corporations as a Front-End Developer and web / mobile sites and web applications for small businesses and individuals as a one-person web agency.</p>
						<p>My current focus is user interface design and development for desktop and mobile browsers, responsive web design, web site front-end performance optimization, web standards, user experience, accessibility, cross-browser and cross-platform development.</p>
						<p>This web site highlights some of my professional skills, contains reference materials and links, has some fun pages, and serves as a sandbox for playing with new code.</p>
					</div>
				</article>
				<h1>Services</h1>
					<ul class="services">
						<li><span class="black bold">Web Services:</span> domain registration, web hosting, concept development, content management (maintenance)</li>
						<li><span class="black bold">Web Design:</span> concept design and building web sites (desktop, tablet, mobile, responsive design)</li>
						<li><span class="black bold">Web Development:</span> programming and integration of Internet applications</li>
						<li><span class="black bold">Web Template Service:</span> converting your designs to HTML5 (or XHTML), CSS, and JavaScript templates that adhere to W3C standards and the highest level of accessibility</li>
						<li><span class="black bold">Website Assessment Report:</span> reviewing every aspect of your online presence and recommend cost-effective improvements.</li>
						<li><span class="black bold">Website Performance Optimization:</span> analyzing the speed of your website, make recommendations, and implement solutions to make your website fast.</li>
						<li><span class="black bold">Internationalization:</span> developing multi-lingual websites or add additional languagues to your existing website.</li>
						<li><span class="black bold">Google Analytics</span> for your website.</li>
						<li><span class="black bold">Email Newsletters:</span> design, build, sending.</li>
					</ul>
					<p>JK IT Consulting, Ltd. is registered in Ontario, Canada, but the web allows me to collaborate no matter where you are in the world.</p>
					<p>I speak English, Russian, and Ukrainian.</p>
			</div>
			<div class="latest_projects" data-behavior="modal">
				<h2>Latest Public Projects</h2>
				<article id="jwplayerdemo" class="title_jwplayer">
					<a href="demo_jwplayer/index.php" class="modal"><img src="<?php echo $media ?>logo_pialaw.png" alt="logo www.pialaw.ca" /></a>
					Image rotator with built-in video: HTML5 &lt;video&gt; with fallback to Flash player: <a href="http://www.pialaw.ca" class="link">www.pialaw.ca</a>.
				</article>
				<article class="title_my_mobile">
					<img src="<?php echo $media ?>qr-jk-mobile.png" alt="QRCode" />
					Personal web mobile site; works on all mobile browsers including ancient ones <a href="mobile/" class="link" target="_blank">m.janetkulyk.com</a>.
				</article>
			</div>
			<iframe src="https://www.facebook.com/plugins/like.php?href=http://www.janetkulyk.com" scrolling="no" frameborder="0" style="border:none; width:450px; height:80px"></iframe>
			
			
			

      
      
      
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
					<a href="http://www.janetkulyk.com/kinetic-typography-video/" target="_blank"><img src="<?php echo $media ?>ad_css3_125x125.png" alt="" /></a>
				</div>
			</aside>
		</div>
		<?php include("inc/footer_new.inc.php"); ?>
		<?php include("inc/ga.php"); ?>
	</body>
</html>