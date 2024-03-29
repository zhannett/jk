<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - Partners - Developer Partners</title>
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
											<?php include("inc/nav_partners.php")?>
											<div class="h100"></div>
											<p class="downloads"><span>Downloads</span></p>
											<a href="">DEVELOPER DATA SHEET &gt;</a>	
											<div class="h20"></div>
											<a href="">ISV BROCHURE &gt;</a>
											<div class="h20"></div>
											<a href="">ISV WHITEPAPER &gt;</a>					
									</div>
									
									<div id="col_right" class="a1">
											<div style="width:700px; height:250px; background-color:#CCCCCC">
													<span>Developer partner program.</span>
											</div>
											<div id="columns">
													<div id="col1">
															<h1>Developer Partners receive software, implementation, training, joint marketing, and sales support.</h1>
															<p>And your customers benefit from self-service capabilities to explore, understand, and take action on their data. By delivering leading-edge, dirt-simple SaaS BI to your customers, you&acute;ll exceed their expectations, improve your relationship, gain executive visibility, and open the door to sell them premium information services.</p>
															<div class="h20"></div>
															<div style="width:200px; background-color:#FFCC33"><h2>Why Partner?</h2></div>
															<div class="h20"></div>
															<h2>Increase your revenue</h2>
															<ul>
																	<li>Sell more new accounts with highly differentiated functionality</li>
																	<li>Retain customers and add new users, enjoying increased executive visibility and in turn sponsorship</li>
																	<li>Create a new revenue stream by upselling a new feature</li>
																	<li>Start selling immediately with a faster time-to-market than competitors deploying solutions through a non-hosted approach</li>
															</ul>
															<div class="h20"></div>
															<h2>Reduce your costs and risk</h2>
															<ul>
																	<li>Reduce the cost of developing and supporting new features</li>
																	<li>Reduce financial and technical risk compared to adding BI functionality through build-your-own or on-premise alternatives</li>
																	<li>Minimize the cost of initial and ongoing integration</li>
																	<li>minimize support costs with an easy to use, self-service interface</li>
															</ul>
															<div class="h20"></div>
													</div>
													<div id="col2">
															<div id="bg_orange"><span>Get<br/>Started</span></div>
															<p>Become a Blink Developer Partner and provide your customers with Intelligence at the Speed of Business<sup>TM</sup>. If you are interested in learning more about becoming a Blink Logic partner, please contact<br/><a href="mailto:partners@blinklogic.com">PARTNERS@<br/>BLINKLOGIC.COM</a>.</p>
															<div class="h50"></div>
															<div class="more_info"></div>
															<p>For more information,</p>
															<a href="">CLICK HERE TO<br/>CONTACT US &gt;</a>	
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
					$('#mainNav>#partners') .addClass('partners');
					$('#mainNav>li') .addClass('border_left');
					$('#mainNav>li:first-child') .removeClass('border_left') .css('padding-left','0px');	
					$('li#company_bg') .removeFirstChild;
					$('li#developer_partners>a') .css('color','#0A9DDC') .css('text-decoration','underline');
			</script>				
	</body>
</html>