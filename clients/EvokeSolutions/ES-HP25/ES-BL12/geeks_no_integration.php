<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - Geeks - No Integration Required</title>
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
									<div id="content_top">
													<div id="col_left">
															<?php include("inc/nav_geeks.php")?>
													</div>
													<div id="col_right" class="nointegration">
															<div id="nointegration">
																	<h1>Cloud computing model<br/>eliminates integration</h1>
															</div>
													</div>
										</div>
										<div id="content_bottom" class="nointegration">
												<div id="col_left">
														<div class="h50"></div>
														<div id="more_info"></div>
														<p>For more information,</p>
														<a href="">CLICK HERE TO<br/>CONTACT US &gt;</a>														
												</div>
												<div id="col_middle">
														<p>It couldn&acute;t be easier to make Blink Logic a part of your application. Integration with our platform is just a URL, which avoids wasting scarce application developer calories to integrate an on-premise solution. At the outset of the relationship, and every time you (or the vendor) changes a release.</p>
														<p>Integrating with Blink Logic&acute;s SaaS solution means having your users using the absolutely most up-to-date version the minute that a new improvement is added to the Blink Logic platform.</p>
												</div>
										</div>
							</div>
							
							<?php include("inc/footer.php")?>
				
					</div><!-- end pageWrapper -->
			</div><!-- end page -->
			<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
			<script type="text/javascript">
					$('#mainNav>#blink') .hover(function(){$(this) .addClass('blink');}, function(){$(this) .removeClass('blink');});
					$('#mainNav>#tour') .hover(function(){$(this) .addClass('tour');}, function(){$(this) .removeClass('tour');});
					$('#mainNav>#benefits') .hover(function(){$(this) .addClass('benefits');}, function(){$(this) .removeClass('benefits');});
					$('#mainNav>#solved') .hover(function(){$(this) .addClass('solved');}, function(){$(this) .removeClass('solved');});
					$('#mainNav>#geeks') .addClass('geeks');
					$('#mainNav>#services') .hover(function(){$(this) .addClass('services');}, function(){$(this) .removeClass('services');});
					$('#mainNav>#partners') .hover(function(){$(this) .addClass('partners');}, function(){$(this) .removeClass('partners');});
					$('#mainNav>li') .addClass('border_left');
					$('#mainNav>li:first-child') .removeClass('border_left') .css('padding-left','0px');
					
					$('li#no_integration') .removeFirstChild;
					$('li#no_integration>a') .css('color','#0A9DDC') .css('text-decoration','underline');
			</script>				
	</body>
</html>