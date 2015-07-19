<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - About Us - Company Background</title>
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
											<div id="bg_about_company_bg">
													<span>Blink Logic<br/>in a blink.</span>
													<div id="thevision">The<br/>Vision</div>
											</div>
											<div id="columns">
													<div id="col1">
															<ol>
																	<li>We are headquartered in San Rafael, California</li>
																	<li>We were founded in 2000, as a user-friendly alternative to costly, cumbersome Business Intelligence models.</li>
																	<li>We specialize in helping customer-facing General Managers, their colleagues, customers, and partners get the information they need to take effective action.</li>
																	<li>We have a proven track record partnering with SaaS ISVs, OEMs, and resellers.</li>
																	<li>We trade on the OTCBB as BLKL.</li>
															</ol>
													</div>
													<div id="col2">
															<div class="h20"></div>
															<p>Blink Logic was developed on the premise that a new kind of information system could give GMs the data they needed so they could act fast Ð in a blink.</p>
															<a href="">VIEW THE VISION &gt;</a>				
															<div class="h20"></div>
															<p class="downloads"><span>Downloads</span></p>
															<a href="">BLINK LOGIC OVERVIEW &gt;</a>															
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
					$('li#company_bg') .removeFirstChild;
					$('li#aboutus>a') .css('color','#0A9DDC') .css('text-decoration','underline');
					$('li#company_bg>a') .css('color','#0A9DDC') .css('text-decoration','underline');
			</script>				
	</body>
</html>