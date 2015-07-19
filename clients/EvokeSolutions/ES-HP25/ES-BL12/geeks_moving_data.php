<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - Geeks - Moving Data</title>
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
													<div id="col_right" class="movingdata">
															<div id="movingdata">
																	<h1>Getting data to<br/>into the Cloud.</h1>
																	<span>Cloud<br/>Burner<sup>TM</sup></span>
															</div>
													</div>
										</div>
										<div id="content_bottom" class="datadelivery">
												<div id="col_left">
														<div class="h50"></div>
														<div id="more_info"></div>
														<p>For more information,</p>
														<a href="">CLICK HERE TO<br/>CONTACT US &gt;</a>														
												</div>
												<div id="col_middle">
														<h1>Blink Logic solves the problem of how to move large amounts of customer data across the Internet while maintaining all relevant information.</h1>		
														<p>Blink Logic&acute;s data moving feature allows the automatic transfer of client data across physical infrastructure according to hardware load and performance, so Blink Logic client&acute;s resource loads are precisely matched to their business requirements and the available infrastructure.</p>			
														<img src="img/img_movingdata.gif" width="454" height="144" alt="" />
												</div>
												<div id="col_right">
														<p>Cloud Burner<sup>TM</sup> is a patent-pending, self-service data refresh capability that extracts the customers relevant thin slice of data, transfers it securely over the Internet and loads it into the customers information that is stored on the Blink Logic site.</p>
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
					
					$('li#moving_data') .removeFirstChild;
					$('li#moving_data>a') .css('color','#0A9DDC') .css('text-decoration','underline');
			</script>				
	</body>
</html>