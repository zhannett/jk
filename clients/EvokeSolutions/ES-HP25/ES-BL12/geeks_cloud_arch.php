<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - Geeks - Cloud Architecture</title>
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
											<?php include("inc/nav_geeks.php")?>
											<div class="h100"></div>
											<div id="more_info"></div>
											<p>For more information,</p>
											<a href="">CLICK HERE TO<br/>CONTACT US &gt;</a>	
									</div>
																
									<div id="col_right">
											<div id="cloud">
													<div id="title_cloud"><h1>An agile solution.</h1></div>
													<p>The Blink Logic environment is based on a cloud computing architecture. By moving the software, hardware, and security infrastructure to the cloud and leveraging the Internet, customers can significantly reduce their costs, leveraging Blink Logic&acute;s ability to spread the investment and management expenses across a volume of customers. Customers can also substantially reduce their risk by starting with a targeted set of users and expanding just in time to meet the surge in demand. Overall, Blink Logic provides customers with an low cost, low risk, agile solution.</p>
													<p>The Blink Logic environment is a standards-based platform: Intel &quot; Quad-Core processors running Linux 64, gigabit networking, EMC Fiber Channel SAN, Cisco PIX firewall, and a utility-enabled grid architecture provide &quot;. Power of no redundancy across multiple physical nodes with failover.</p>
													<img src="img/img_cloud.gif" width="548" height="318" alt="" />
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
					
					$('li#cloud_arch') .removeFirstChild;
					$('li#cloud_arch>a') .css('color','#0A9DDC') .css('text-decoration','underline');
			</script>				
	</body>
</html>