<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - About Us</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<!--[if IE]> <link href="css/ie.css" rel="stylesheet" /> <![endif]-->  
		<!--[if lt IE 7]> <link href="css/ie6.css" rel="stylesheet" /> <![endif]-->	
	</head>
	
	<body>
			<div id="page">
					<div id="pageWrapper">
							<?php include("inc/header_mainNav.php")?>
							<div id="content">										
									<div id="col_left">
											<?php include("inc/nav_aboutus.php")?>
											<div class="h100"></div>
											<div class="more_info"></div>
											<p>For more information,</p>
											<a href="">CLICK HERE TO<br/>CONTACT US &gt;</a>
									</div>
									
									<div id="col_right" class="a1">
											<div id="bg_about">
													<span>Defining the<br/>future of Business<br/>Intelligence.</span>
													<div id="joinus">Join<br/>Us</div>
											</div>
											<div id="columns">
													<div id="col1">
															<h1>Blink Logic is dedicated to helping executives enhance relationships with customers and partners by delivering visual insights into their business that allow them to take decisive action.</h1>
															<p>We also help Independent Software Vendors increase the value of their products by giving their customers a highly visual, customizable view of the data their products generate. Self-service access to information and reporting - always ready at any browser - allows users to get insights that other companies take months to generate, so they can seize opportunities or solve problems as they happen.</p>
															<p>Using a SaaS (Software-as-a-Service) subscription model makes Blink Logic cost-effective and instantly deployable, easing dependence on IT departments. With Blink Logic, companies can benefit from a full business intelligence solution for a low monthly per-user fee, and avoid the huge upfront costs associated with traditional licensing approaches.</p>
													</div>
													<div id="col2">
															<div class="h20"></div>
															<p>If you can think on your feet, have a great gut instinct, and a desire to join a team that is bringing true intelligence to business intelligence, Blink Logic may be your professional home.</p>
															<a href="">VIEW<br/>CAREERS  &gt;</a>				
															<div class="h50"></div>
															<p class="downloads"><span>Downloads</span></p>
															<a href="">BLINK LOGIC OVERVIEW &gt;</a>
															<div class="h20"></div>
															<a href="">SAAS WHITEPAPER &gt;</a>
															<div class="h20"></div>
													</div><!--  end col2 -->
											</div><!--  end columns -->
									</div><!--  end col_right -->	
							</div><!--  end content -->
							
							<?php include("inc/footer.php")?>
				
					</div><!-- end pageWrapper -->
			</div><!-- end page -->
			<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
			<script type="text/javascript">
					$('#mainNav>#blink') .hover(function(){$(this) .addClass('blink');}, function(){$(this) .removeClass('blink');});
					$('#mainNav>#tour') .hover(function(){$(this) .addClass('tour');}, function(){$(this) .removeClass('tour');});
					$('#mainNav>#benefits') .hover(function(){$(this) .addClass('benefits');}, function(){$(this) .removeClass('benefits');});
					$('#mainNav>#solved') .hover(function(){$(this) .addClass('solved');}, function(){$(this) .removeClass('solved');});
					$('#mainNav>#geeks') .hover(function(){$(this) .addClass('geeks');}, function(){$(this) .removeClass('geeks');});
					$('#mainNav>#services') .hover(function(){$(this) .addClass('services');}, function(){$(this) .removeClass('services');});
					$('#mainNav>#partners') .hover(function(){$(this) .addClass('partners');}, function(){$(this) .removeClass('partners');});
					$('#mainNav>li') .addClass('border_left');
					$('#mainNav>li:first-child') .removeClass('border_left') .css('padding-left','0px');	
					$('li#aboutus') .removeFirstChild;
					$('li#aboutus>a') .css('color','#0A9DDC') .css('text-decoration','underline');
					$('li#about_overview>a') .css('color','#0A9DDC') .css('text-decoration','underline');
			</script>				
	</body>
</html>