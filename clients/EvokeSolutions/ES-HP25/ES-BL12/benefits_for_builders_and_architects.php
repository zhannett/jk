<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - Benefits - For Builders and Architects</title>
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
											<?php include("inc/nav_benefits.php")?>
											<div class="h100"></div>
											More<br/>
											<a href="">LEARN MORE ABOUT<br/>BLINK LOGIC&acute;S<br/>TECHNOLOGY &gt;</a>		
									</div>
									
									<div id="col_right" class="a1">
											<div style="width:700px; height:200px; background-color:#CCCCCC">
													<span>For Builders<br/>and Architects.</span>
											</div>
											<div id="columns">													
													<div id="col1">
													<h1>If you are responsible for building customer-facing applications...</h1>
													<p>Take advantage of Blink Logic&acute;s Software-as-a-Service approach to integrate scorecards, dashboards and web reports into your application. By delivering a leading-edge, easy-to-use information solution to your customers, you&acute;ll exceed their expectations, improve your relationship, gain executive visibility, and open the door to sell them premium services. All at a low cost, with low risk, as our URL-level integration means no custom development is required.</p>
													<div class="h20"></div>
													<h2>Always Current and Compatible</h2>
													<p>Investing in BI usually requires IT to maintain ever- growing data silos and support endless cycles of creating and modifying reports for business users. With Blink Logic, IT delivers flexible, secure BI and reporting without having to maintain it themselves... so they can focus on innovation rather than infrastructure, on creating real business value, and on developing new solutions rather than upgrading on-premise software.</p>
													<div class="h20"></div>
													<h2>Delight Customers</h2>
													<p>Blink Logic&acute;s simple, flexible UI guarantees your project will get used by delivering useful information in a useful format. Unlike homegrown or traditional &quot;on-premise&quot; solutions, SaaS-based product enhancements are always current and always compatible with your applications, eliminating the effort, cost and risk of both initial and ongoing integration. Your customers will reward you for your utter lack of effort with high usage numbers and rave reviews.</p>
													<div class="h20"></div>
													</div>
													<div id="col2">
															<div class="h100"></div>
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
					$('#mainNav>#benefits') .addClass('partners');
					$('#mainNav>#solved') .hover(function(){$(this) .addClass('solved');}, function(){$(this) .removeClass('solved');});
					$('#mainNav>#geeks') .hover(function(){$(this) .addClass('geeks');}, function(){$(this) .removeClass('geeks');});
					$('#mainNav>#services') .hover(function(){$(this) .addClass('services');}, function(){$(this) .removeClass('services');});
					$('#mainNav>#partners') .hover(function(){$(this) .addClass('partners');}, function(){$(this) .removeClass('partners');});
					$('#mainNav>li') .addClass('border_left');
					$('#mainNav>li:first-child') .removeClass('border_left') .css('padding-left','0px');	
					$('li#company_bg') .removeFirstChild;
					$('li#builders>a') .css('color','#0A9DDC') .css('text-decoration','underline');
			</script>				
	</body>
</html>