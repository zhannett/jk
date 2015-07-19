<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - Home Page</title>
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
									<div id="home">
									
											<div id="col_left">
													<div id="demo"><span>Demo</span></div>
													<p><a href="">SIGN-UP<br/>FOR A<br/>DEMO &gt;</a></p>
											</div>								
											
											<div id="col_right">
													<div id="main">
															<span>Rotten Apple?<br/>Or low hanging fruit.</span>
															<h1>Now you can tell the<br/>difference in a blink.</h1>
															<p>Blink Logic delivers a fast, effective way to get insights on your business so you can quickly identify and seize opportunities.</p>
															<p>Simple. Flexible. Visual. Blink Logic is the launchpad for your next smart move.</p>
													</div>
													<div id="columns">
															<div id="col1">
																	<div class="title"><span>Retain Customers</span></div>
																	<p>Strengthen your relationship with your best customers and partners.</p>
																	<a href="">LEARN HOW  &gt;</a>
															</div>
															<div id="col2">
																	<div class="title"><span>Sell More</span></div>
																	<p>Motivate your customers to buy more and partners to sell more.</p>
																	<a href="">LEARN HOW  &gt;</a>
															</div>
															<div id="col3">
																	<div class="title"><span>Lure New Prospects</span></div>
																	<p>Entice customers and partners away from your competitors.</p>
																	<a href="">LEARN HOW &gt;</a>
															</div>
													</div><!-- end columns -->
											</div><!-- end col_right -->
									</div><!-- end home -->		
							</div><!-- end content -->
							
							<div class="f180">
									<?php include("inc/footer.php")?>
							</div>
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
			</script>				
	</body>
</html>
