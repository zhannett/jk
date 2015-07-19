<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - Partners - Partner Examples</title>
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
											<?php include("inc/nav_partners.php")?>
											<div class="h50"></div>
											<p class="downloads"><span>Downloads</span></p>
											<a href="">ISV BROCHURE &gt;</a>
											<div class="h20"></div>
											<a href="">ISV WHITEPAPER &gt;</a>			
									</div>
									
									<div id="col_right" class="b1">
											<div style="width:700px; height:200px; background-color:#CCCCCC">
													<span>Become a Blink<br/>Evangelist.</span>
													<h3>Why<br/>Partner?</h3>
											</div>
											<h1>Some of the world&acute;s leading Independent Software Vendors (ISVs) incorporate Blink Logic into their applications to deliver next-generation information services to their clients, including:</h1>
											<div>See who&acute;s Blinking with us.</div>
											<a href="">DEVELOPMENT<br/>PARTNER<br/>BENEFITS &gt;</a>

									</div><!--  end col_right -->	
									
									<dl class="table-display">
											<dt>image</dt>
											<dd>
													<h2>CMG Logistics, a leading global transportation management company, added Blink Logic&acute;s SaaS-based BI service to their own</h2>
													SaaS-based Transportation Data Management Service (TDMS) that they sell to mid-market clients. CMG Logistics executives said they expect to shave anywhere from three to eight percent off their client&acute;s shipping costs with more accurate tracking using Blink Logic to provide better visibility into logistics information. This can add an additional million dollars to the bottom line for companies that spend in the realm of $10 million a year on shipping costs.
											</dd>
											
											<dt>image</dt>
											<dd>
													<h2>CRMG, a strategic Customer Relationship Management solution provider for small and medium businesses, selected Blink Logic to</h2> provide robust reporting and analytics tools that support the customer&acute;s sales process. By integrating Blink Logic into its CRM solution, CRMG puts the power of reporting, collaboration, and analysis into the hands of its customers to gain visibility and control over their own data.
													<p>
															&quot;We are excited to see our clients&acute; reactions for the upcoming annual reviews when we present them the Blink Logic BI solution integrated with our CRM platform... We will be able to provide our clients with an unprecedented level of visibility into their data with surprisingly little effort.&quot;
															<div class="author">- Miri Ali, CEO of CRMG</div>
													</p>
											</dd>
											
											<dt>image</dt>
											<dd>
													<h2>&quot;We want to be even more agile in responding to our employer client&acute;s needs by putting the best possible information at the</h2> 
													fingertips of our client service personnel. Blink Logic enables us to offer a wider range of options, tailor them quickly to fit specific needs and tune them to assure their effectiveness. We are very interested in working with Blink Logic technology to determine boarder solutions for many of our business intelligence needs.&quot;
													<div class="author">- Steve Swartz, Chief Information Officer, RedBrick Health</div>
											</dd>
											
											<dt>image</dt>
											<dd>
													<h2>&quot;One of the things that customers rely on us for is delivering the next thing and staying ahead of the curve. We had been on the</h2>
													looking for an application that will help our customers generate better information in a more timely manner. For us it always this other comes back to delivering the most possible value to our clients, and that&acute;s what attracted us to BlinkLogic.&quot;
													<div class="author">- Troy Long, Vistacomm</div>
											</dd>
											
											<dt>image</dt>
											<dd>
													<h2>&quot;We believe that Blink Logic will do two things for us. It will improve our ability to give our partners trend and behavioral data</h2>
													to make sure we are presenting to consumers the most attractive and profitable range of offerings. And it will enhance information that is available to our service personnel and systems, assuring that they put together the best possible solutions for consumers, based on a level of information and knowledge that was previously unavailable&quot;.
													<div class="author">- Executive Vice President of Corporate Development, leading retail tools firm</div>
											</dd>
											
											<dt>image</dt>
											<dd>
													<h2>&quot;We looked at four vendors in depth, and Blink Logic offered the best flexibility, scalability and ease of use. We are offering all the</h2>
													software features we wanted to offer, and our customers&acute; management teams can even go beyond our structure as they condense their raw data. Our due diligence gave us confidence that Blink Logic can scale along with our ambitious plans. We found Blink Logic&acute;s great user experience and easy customer implementation to be vital benefits, since our new offering only gets traction if it is widely used throughout an organization.&quot;
													<div class="author">- Managing Partner, property management MRO platform provider</div>
											</dd>
									</dl>
									<div class="h20"></div>
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
					$('#mainNav>#partners') .addClass('partners');
					$('#mainNav>li') .addClass('border_left');
					$('#mainNav>li:first-child') .removeClass('border_left') .css('padding-left','0px');	
					$('li#company_bg') .removeFirstChild;
					$('li#partner_examples>a') .css('color','#0A9DDC') .css('text-decoration','underline');
			</script>				
	</body>
</html>