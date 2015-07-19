<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();	
	$page_title='Janet (Zhanna) Kulyk\'s Web Site - Web Development Services'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, freelancer, freelance developer, web freelancer, web development, interface, frontend, performanse, web 2.0, Toronto, Ontario, Canada'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering';
	$thickbox = '';	
	include("inc/header.inc.php");
?>

	
				<div id="col_left">
					<?php include("inc/w3c.inc") ?>	
				</div>
					
				<div id="col_middle">									
					<div id="index">
						<div id="welcome" class="resizable rounded">
							<div class="welcome_box">
								<h1 class="hidden_seo">Janet (Zhanna) Kulyk's Web Site - Web Development Services</h1>
								<h2>Welcome!</h2>
								<div id="welcome_img">
									<img src="img/zhanna1.jpg" alt="My Photo" width="274" height="204" />
								</div>
								<div id="welcome_text" class="resizable rounded">
									<p>My name is Janet (or Zhanna) Kulyk, and I am a web developer. I'm working with Ext JS, AJAX, JSON, XHTML/CSS/JavaScript, XML/XSL, PHP-MySQL, Struts, JSP, .NET framework as well as cross-browser development, cross-platform development, accessibility, usability and performance.</p>
									<!--<p>I worked on and/or built out the following online brands: <a href="http://www.canada.com">www.canada.com</a>, <a href="http://www.bankofamerica.com">www.bankofamerica.com</a>, <a href="http://www.thestar.com">www.thestar.com</a>, <a href="http://www.toronto.com">www.toronto.com</a>, <a href="http://www.virginmobile.ca">www.virginmobile.ca</a>, <a href="http://www.cox.com">www.cox.com</a>, <a href="http://www.eyeweekly.com">www.eyeweekly.com</a>, <a href="http://www.thankyou.com">www.thankyou.com</a>, among others.</p>-->
									<p>This web site highlights some of my skills, contains reference materials and links, as well as forum and some fun pages.</p>
								</div>
							</div>
						</div>						
						<div id="index_columns">
							<div id="index_hire" class="column rounded">
								<div class="col_box">
									<h5>You wish to hire me</h5>
									<ul>
										<li><a href="portfolio.php">Portfolio</a></li>
										<li><a href="skills.php">Skills</a></li>
										<li><a href="education.php">Education</a></li>
									</ul>
									<p>My professional profile can be found on <a href="http://www.linkedin.com/in/janetkulyk" title="Professional Profile on LinkedIn">www.linkedin<br/>.com/in/janetkulyk</a>.</p>
								</div>
							</div>
							<div id="index_developer" class="column rounded">
								<div class="col_box">
									<h5>You are a fellow developer</h5>
									<ul>
										<li><a href="links.php">WebDev Links</a></li>
										<li><a href="forum.php">Forum</a></li>
									</ul>
								</div>
							</div>
							<div id="index_friend" class="column rounded">
								<div class="col_box">
									<h5>You are my friend</h5>
									<ul>
										<li><a href="photogalleries.php">Photogalleries</a></li>
										<li><a href="forum.php">Forum</a></li>
										<li><a href="game.php">Game</a></li>
									</ul>
								</div>
							</div>
						</div>					
					</div> 								
				</div>
					
				<div id="col_right">										
					<div class="resizable quotation rounded">
						<blockquote>
							<div class="quot">&quot;Be yourself, everyone else is already taken.&quot;</div>
							<div class="author">&mdash; Oscar Wilde</div>
						</blockquote>
					</div>
					<div class="h20"></div>
					<div class="resizable quotation rounded">
						<blockquote>
							<div class="quot">&quot;The greatest glory is not in never failing, but in rising up every time we fall.&quot;</div>
							<div class="author">&mdash; Confucius,<br/>551 BC – 479 BC</div>
						</blockquote>
					</div>

					<!--<h5>Recommended:</h5>
					<a href="http://easyseoguide.com/"><img src="img/img_easy_seo_guide.gif" width="104" height="162" alt="Easy SEO Guide" /></a>-->
				</div>
		
		<?php include("inc/footer.inc.php"); ?>					
		<script type="text/javascript">
			//<![CDATA[
				$('#sf-menu_home>a') .css('background-color','#005A9C') .css('color','#FFF') .css('cursor','text');	
			//]]>	
		</script>			
		<?php include("inc/ga.php"); ?>
	</body>
</html>