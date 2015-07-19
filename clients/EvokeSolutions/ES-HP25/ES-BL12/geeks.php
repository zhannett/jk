<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - Geeks - Overview</title>
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
											<div id="bg_geek">													
													<div id="col_left">
															<?php include("inc/nav_geeks.php")?>
															<span>For the<br/>Geeks</span>
													</div>
													<div id="col_right">
															<div id="title_geeks"><h1>Making software a solution<br/>instead of a problem</h1></div>
													</div>
												</div>
										</div>										
										<div id="content_bottom">
												<div class="h20"></div>
												<div id="col_left">
														<p>The Blink Logic environment is a standards-based platform: Intel&reg; Quad-Core processors running Linux 64, gigabit networking, EMC Fiber Channel SAN, Cisco PIX firewall, and a utility-enabled grid architecture provide &quot;Power of n&quot; redundancy across multiple physical nodes with failover.</p>
														<a href="">LEARN MORE &gt;</a>
												</div>
												<div id="col_middle">
														<h1>Blink Logic provides our customers and partners with a solution that combines technology in the cloud with services.</h1>
														<p>For our customers and partners that live on the business side, it means dealing with people who speak business. It means having people who are available to respond to their requests right now instead of waiting 6 to 18 months for their project to come up in the internal queue. A shorter &quot;flash to bang&quot; means closing new customers and avoiding losing your best ones to the competition.</p>
														<p>For our customers and partners that live on the technical side, it means that just because they are under-funded or under-resourced, they still have a way to respond quickly to their internal business constituents or to their customers and partners demands. While avoiding waiting for changes to the hardware, software and data infrastructure to be budgeted, approved and finalized.</p>
												</div>
												<div id="col_right">
														<div class="h90"></div>
														<div id="more_info"></div>
														<p>For more information,</p>
														<a href="">CLICK HERE TO<br/>CONTACT US &gt;</a>
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
					
					$('li#overview') .removeFirstChild;
					$('li#overview>a') .css('color','#0A9DDC') .css('text-decoration','underline');
			</script>				
	</body>
</html>