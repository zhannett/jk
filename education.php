<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();	
	$page_title='Janet (Zhanna) Kulyk - Education'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, freelancer, freelance developer, web freelancer, web development, interface, frontend, performanse, web 2.0, Toronto, Ontario, Canada'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering';     
	$media = 'http://janetkulyk.s3.amazonaws.com/img/';
	include("inc/header_new.inc.php");
?>

		<div class="aside_left" role="complementary">
			<?php include("inc/w3c.inc") ?>
		</div>
		<div class="main_section">
			<div id="education" class="main_content" data-behavior="smartLinks">													
				<h1>Education</h1>
				<?php include("inc/newwindow.inc") ?>
				<ul id="institutions" class="img_list">
					<li class="clearfix">
						<a href="http://www.aodt.ca/">International Academy of Design and Technology</a>
						<h4>Diploma, e-Commerce Solutions Developer</h4>
						<img src="<?php echo $media ?>logo_iaod.gif" width="411" height="73" alt="International Academy of Design and Technology" />
					</li>
					<li class="clearfix">																			
						<div class="logo_edu"><img src="<?php echo $media ?>logo_kgu.png" alt="National Taras Shevchenko University of Kyiv" width="120" height="120" /></div>
						<div class="name_edu">
							<a href="http://www.univ.kiev.ua/eng/">National Taras Shevchenko University of Kyiv</a>
							<h4>Diploma, Fiber Optics Communication Systems</h4>
						</div>
					</li>
					<li class="clearfix">
						<div class="logo_edu"><img src="<?php echo $media ?>logo_kpi.png" alt="National Technical University of Ukraine &quot;KPI&quot;" width="100" height="94" /></div>
						<div class="name_edu">
							<a href="http://kpi.ua/en/index.php">National Technical University of Ukraine &quot;KPI&quot;</a>
							<h4>M.Sc., Electrical Engineering</h4>
						</div>																			
					</li>										
				</ul>										
			</div>
			<iframe src="https://www.facebook.com/plugins/like.php?href=http://www.janetkulyk.com/education.php" scrolling="no" frameborder="0" style="border:none; width:450px; height:80px"></iframe>
		</div>							
		<div class="aside_right" role="complementary">
			<aside>
				<div class="quot">
					<blockquote>
						All great things require great dedication.
					</blockquote>
				</div>		
				<div class="quot">
					<blockquote>
						The mind is slow to unlearn what it learnt early.
						<cite>Seneca</cite>
					</blockquote>
				</div>
			</aside>
		</div>
		<?php include("inc/footer_new.inc.php"); ?>
		<?php include("inc/ga.php"); ?>
  	</body>
</html>