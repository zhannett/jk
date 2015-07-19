<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - Geeks - Data Delivery</title>
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
													<div id="col_right" class="datadelivery">
															<div id="datadelivery">
																	<div id="title_datadelivery"><h1>Getting data to<br/>the right people.</h1></div>
																	<div id="img_provenresults"><span>Proven<br/>Results</span></div>
															</div>
													</div>
										</div>
										<div id="content_bottom" class="datadelivery">
												<div id="col_left">
														<div id="more_info"></div>
														<p>For more information,</p>
														<a href="">CLICK HERE TO<br/>CONTACT US &gt;</a>														
												</div>
												<div id="col_middle">														
														<p>Blink Logic supports multiple data sources... and people. Heterogeneous data sources from any relational (JDBC) data source such as Oracle, IBM DB2 or Microsoft SQL Server can be integrated into a Blink Logic solution. Our service organization makes data from other BI platforms, database, and other operational data sources such as CRM systems easily accessible.</p>
														<p>The Administration Tools enable the Blink Logic Services team to map the data from all these sources into a useable whole, and then only expose the information to people who are allowed to see it and control what they are allowed to do with it.</p>
												</div>
												<div id="col_right">
														<blockquote>&quot;We are excited to see our clients' reactions for the upcoming annual reviews when we present them the Blink Logic BI solution integrated with our CRM platform ... We will be able to provide our clients with an unprecedented level of visibility into their data with surprisingly little effort.&quot;</blockquote>
														<span class="author">- Mir Ali, CEO of CRMG</span>
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
					
					$('li#data_delivery') .removeFirstChild;
					$('li#data_delivery>a') .css('color','#0A9DDC') .css('text-decoration','underline');
			</script>				
	</body>
</html>