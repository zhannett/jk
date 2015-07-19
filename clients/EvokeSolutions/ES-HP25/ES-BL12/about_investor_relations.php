<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - About Us - Investor Relations</title>
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
											<?php include("inc/nav_aboutus_investor.php")?>
											<div class="h100"></div>
											<div id="bg_left_investor"><span>Demo</span></div>
											<div id="demo"><a href="">SIGN-UP FOR<br/>A DEMO &gt;</a></div>									
									</div>
									
									<div id="col_right" class="a1">
											<div id="bg_investor">
													<span>Company Profile.</span>
													<div id="ir_contact">IR<br/>Contact</div>
											</div>
											<div id="columns">
													<div id="col1">
															<h1>Blink Logic Inc. (OTCBB: BLKL) delivers agile information-on-demand solutions to general manager-level executives in departments of Fortune-class companies. </h1>
															<p>Blink Logic empowers executives to take quick action to keep their best customers and partners, and attract new ones. Self-service access to information and reporting - always ready at any browser - informs their intuition so they take action with confidence without breaking the rhythm of their business life. Blink Logic provides complete Software as a Service business intelligence (SaaS BI) solutions - doing the information technology (IT) heavy lifting - so even the most overwhelmed IT department reacts quickly to executives&acute; demands for information from additional applications, databases, BI systems or external sources. The SaaS subscription model assures predictable costs and instant deployment of improvements.</p>
															<p>Visit <a href="http://www.blinklogic.com">http://www.blinklogic.com</a> to learn more.</p>
															<div class="h20"></div>															
													</div>
													<div id="col2">
															<div class="contact_info">
																	<p>Jeff Salzwedel
																			<br/>Salzwedel Financial 
																			<br/>Communications, Inc.
																			<br/>503-722-7300
																			<br/><a href="mailto:jeff@sfcinc.com">jeff@sfcinc.com</a>
																	</p>
																	<p>
																		Transfer Agent
																		<br/>Computershare Trust<br/>Company, N.A.
																		<br/>350 Indiana Street, 
																		<br/>Suite 800
																		<br/>Golden, CO 80401
																		<br/>(303) 262-0678
																		<br/>800) 962-4284
																	</p>
																	<p>
																		Client service email:
																		<br/><a href="mailto:essential.registry@computershare.com">essential.registry@<br/>computershare.com</a>
																	</p>
															</div>
															<p class="downloads"><span>Downloads</span></p>
															<a href="">BLINK LOGIC OVERVIEW &gt;</a>	
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
					$('li#investorrelations>a') .css('color','#0A9DDC') .css('text-decoration','underline');
					$('li#about_inv>a') .css('color','#0A9DDC') .css('text-decoration','underline');
			</script>				
	</body>
</html>