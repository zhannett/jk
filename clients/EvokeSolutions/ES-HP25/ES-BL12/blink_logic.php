<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - Blink Logic</title>
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
											<div id="bg_bl_img_left"></div>
											<h1 class="orange">With Blink Logic, you can get the information you need, when you need it.</h1>
									</div>
									
									
									<div id="col_right" class="a1">
											<div id="bg_bl"><span>Mulling it over<br/>is so over.</span></div>
											<div id="columns">
													<div id="col1">
															<h2>Blink Logic is a new way to think - literally - about your business. Instead of pondering over analysis,</h2>
															<p>instead of waiting for data, instead of getting in the IT report development queue, Blink Logic gives you and your customers and partners just the information you need, when you need it, so you can get insights and take action - all in a blink.</p>
															<div class="h20"></div>
															<h2>Use Blink Logic to:</h2>
															<ul>
																	<li>Keep your best customers and partners happy, and attract new ones.</li>
																	<li>Act now with confidence instead of months later.</li>
																	<li>Collaborate with colleagues and make better business decisions.</li>
																	<li>Build on successes or make quick course corrections.</li>
															</ul>
													</div>
													<div id="col2">
															<div class="h50"></div>
															<div class="more_info"></div>
															<p>For more information,</p>
															<a href="">CLICK HERE TO<br/>CONTACT US &gt;</a>
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
					$('#mainNav>#blink') .addClass('blink');
					$('#mainNav>#tour') .hover(function(){$(this) .addClass('tour');}, function(){$(this) .removeClass('tour');});
					$('#mainNav>#benefits') .hover(function(){$(this) .addClass('benefits');}, function(){$(this) .removeClass('benefits');});
					$('#mainNav>#solved') .hover(function(){$(this) .addClass('solved');}, function(){$(this) .removeClass('solved');});
					$('#mainNav>#geeks') .hover(function(){$(this) .addClass('geeks');}, function(){$(this) .removeClass('geeks');});
					$('#mainNav>#services') .hover(function(){$(this) .addClass('services');}, function(){$(this) .removeClass('services');});
					$('#mainNav>#partners') .hover(function(){$(this) .addClass('partners');}, function(){$(this) .removeClass('partners');});
					$('#mainNav>li') .addClass('border_left');
					$('#mainNav>li:first-child') .removeClass('border_left') .css('padding-left','0px');					
			</script>				
	</body>
</html>