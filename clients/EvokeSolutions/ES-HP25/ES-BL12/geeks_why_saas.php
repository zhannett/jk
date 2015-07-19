<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - Geeks - Why SAAS</title>
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
													<div id="col_right" class="whysaas">
															<div id="whysaas">
																	<div id="title"><h1>Providing a new solution<br/>to an old problem.</h1></div>
															</div>
													</div>
										</div>
										<div id="content_bottom">
												<div id="col_left">
														<div id="img_thevision"><span>Demo</span></div>
														<div id="demo"><a href="">SIGN-UP FOR<br/>A DEMO &gt;</a></div>
												</div>
												<div id="col_middle">
														<h1>All business users always seem to want their information at the same time - NOW.</h1>
														<p>They don&acute;t seem to care that most IT organizations are dealing with very complex business intelligence environments and are almost always under-staffed and under-funded. And they can&acute;t understand why it takes 6 to 12 months to get a project approved and funded, much less wait another 3 months to get the first report out.</p>
														<p>By leveraging the SaaS model, an IT project manager can say &quot;yes&quot; and leverage Blink Logic&acute;s cloud computing infrastructure and solutions team to deliver phase one of the project in days or weeks, not quarters. And when the business people or their clients and partners have another &quot;simple&quot; request, the Blink Logic solution is only a phone call away.</p>
														<p>And unlike an on-premise solution, the monthly subscription pricing model often already fits in the business user&acute;s operating budget.</p>
												</div>
												<div id="col_right">
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
					
					$('li#why_saas') .removeFirstChild;
					$('li#why_saas>a') .css('color','#0A9DDC') .css('text-decoration','underline');
			</script>				
	</body>
</html>