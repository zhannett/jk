<?php

ini_set('display_errors','On');
 	error_reporting(E_ALL);



	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();	
	$page_title='Janet (Zhanna) Kulyk\'s Web Site - Front-End development, Web Development Services - Toronto, Canada; WebDev References; Fun'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, web developer, front-end engineer, UI developer, frontend, web performance, Toronto, Ontario, Canada'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, front-end engineering. WebDev References, Fun pages';
	$thickbox = '';	
	$google_site_verification = '<meta name="google-site-verification" content="mA36N0CD7ALdTKHKR-ShMKKlwH8qDLEjWxwzbV47UnU" />';
	include("inc/header_new_max.inc.php");
?>

	<div class="yui-b">
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
								<img src="img/zhanna1.jpg" alt="My Photo" width="274" height="204" />
							</div>																					
							<div class="promo">
								<p>My name is Janet (Zhanna) Kulyk, I am a Web Developer. I create web sites for large corporations as a team member and for small businesses as a one-person web agency.</p>
								<p>My current focus is front-end engineering, web standards, cross-browser and cross-platform web development.</p>
								<p>My professional profile on LinkedIn: </p>
								<span class="inline_linkedin"><a href="http://www.linkedin.com/in/janetkulyk" title="Professional Profile on LinkedIn">www.linkedin.com/in/janetkulyk</a>.</span>
								<p>This web site highlights some of my professional skills, contains reference materials and links, has some fun pages, and serves as a sandbox for playing with code.</p>
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
				<!--			
				<div id="quot2" class="resizable">
					<blockquote>
						<div class="quot">&quot;The greatest glory is not in never failing, but in rising up every time we fall.&quot;</div>
						<div class="author">&mdash; Confucius,<br/>551 BC - 479 BC</div>
					</blockquote>
				</div>			
				-->		
			</div>
<!-- ************************************************************************************************************ -->			
			<h3>News</h3>
			<div id="news-feed"></div>


<!-- ************************************************************************************************************ -->	
			
	</div><!-- EOF unit-first -->		
		
					
		</div> <!--EOF grid ge -->
		
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
					<h5>Recent work</h5>
					<ul>
						<li><a href="http://www.dose.ca" title="Link to dose.ca web site">dose.ca</a></li>
						<li><a href="http://www.alpinistkpi.com" title="Link to Alpinist KPI web site">Alpinist KPI</a></li>
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
				<div class="col last">
					<h5>Highly Recommended</h5>
					<a href="http://www.manning.com/resig/" title="Secrets of the JavaScript Ninja"><img src="img/secrets_of_JS_ninja.jpg" width="144" height="180" alt="Secrets of the JavaScript Ninja" /><br/>Secrets of the JavaScript Ninja</a>			
					<!-- <p>The untold secrets of the elite JavaScript programmers distilled for intermediate JavaScript programmers, bringing them completely up to speed with the challenges of modern JavaScript development. Explores specific techniques, strategies, and solutions to developing robust, cross-browser, JavaScript code.</p> -->
				</div>
			</div><!-- EOF 3 boxes -->					
		
	</div><!--EOF block -->
	
</div><!--EOF main -->



		
		<?php include("inc/footer_new.inc.php"); ?>	
							
		<script type="text/javascript">
			//<![CDATA[
				$('#sf-menu_home>a') .css('background-color','#005A9C') .css('color','#FFF') .css('cursor','text');					
			//]]>	
		</script>	
		
		<?php //include("inc/ga.php"); ?>
	</body>
</html>