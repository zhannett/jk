<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();	
	$page_title='Janet (Zhanna) Kulyk - Education'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, freelancer, freelance developer, web freelancer, web development, interface, frontend, performanse, web 2.0, Toronto, Ontario, Canada'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering';     
	$media = 'http://74fc8dbd1b965de1c679-6efcb597f6004a0f0ebadc4fc23e6156.r82.cf1.rackcdn.com';
	include("inc/header_new.inc.php");
?>

				<aside class="aside_left">
					<?php include("inc/w3c.inc") ?>
				</aside>
				<section id="mainSection">
					<div id="education" class="main_content" data-behavior="smartLinks">													
						<h1>Education</h1>
						<?php include("inc/newwindow.inc") ?>
						<ul id="institutions" class="img_list" data-behavior="colorLinks">
							<li class="clearfix">
								<a href="http://www.iadt.ca/">International Academy of Design and Technology</a>
								<h4>Diploma, e-Commerce Solutions Developer</h4>
								<img src="http://74fc8dbd1b965de1c679-6efcb597f6004a0f0ebadc4fc23e6156.r82.cf1.rackcdn.com/logo_iaod.gif" width="411" height="73" alt="International Academy of Design and Technology" />
							</li>
							<li class="clearfix">																			
								<div class="logo_edu"><img src="http://74fc8dbd1b965de1c679-6efcb597f6004a0f0ebadc4fc23e6156.r82.cf1.rackcdn.com/logo_kgu.png" alt="National Taras Shevchenko University of Kyiv" width="120" height="120" /></div>
								<div class="name_edu">
									<a href="http://www.univ.kiev.ua/eng/">National Taras Shevchenko University of Kyiv</a>
									<h4>Diploma, Fiber Optics Communication Systems</h4>
								</div>
							</li>
							<li class="clearfix">
								<div class="logo_edu"><img src="http://74fc8dbd1b965de1c679-6efcb597f6004a0f0ebadc4fc23e6156.r82.cf1.rackcdn.com/logo_kpi.png" alt="National Technical University of Ukraine &quot;KPI&quot;" width="100" height="94" /></div>
								<div class="name_edu">
									<a href="http://kpi.ua/en/index.php">National Technical University of Ukraine &quot;KPI&quot;</a>
									<h4>M.Sc., Electrical Engineering</h4>
								</div>																			
							</li>										
						</ul>										
					</div>
				</section>							
				<aside class="aside_right">
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
			</section>
		</div>
		<?php include("inc/footer_new.inc.php"); ?>
		<?php include("inc/ga.php"); ?>
  	</body>
</html>