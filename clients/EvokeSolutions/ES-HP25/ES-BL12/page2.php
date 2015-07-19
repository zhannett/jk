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
							<div id="header">
									<div id="logo"><img src="img/logo.gif" width="171" height="49" alt="Blink Logic Logo" /></div>
									<div id="slogan"><img src="img/slogan.gif" width="134" height="29" alt="Intelligence at the Speed of Budiness TM" /></div>
							</div>
				
							<div id="div_nav">
									<ul id="mainNav">
										<li id="blink"><a href=""><span class="nav1">WHAT IS</span><br/><span class="nav2">Blink Logic</span></a></li>
										<li id="tour"><a href=""><span class="nav1">TAKE A</span><br/><span class="nav2">Tour</span></a></li>
										<li id="benefits"><a href=""><span class="nav1">BLINK</span><br/><span class="nav2">Benefits</span></a></li>
										<li id="solved"><a href=""><span class="nav1">PROBLEMS</span><br/><span class="nav2">Solved</span></a></li>
										<li id="geeks"><a href=""><span class="nav1">PRODUCT DETAILS</span><br/><span class="nav2">For the Geeks</span></a></li>
										<li id="services"><a href=""><span class="nav1">PROFESSIONAL</span><br/><span class="nav2">Services</span></a></li>
										<li id="partners"><a href=""><span class="nav1">BLINK</span><br/><span class="nav2">Partners</span></a></li>
									</ul>
							</div>
									<ul id="rightNav">
										<li><a href="">About Us</a></li>
										<li><a href="">Buzz</a></li>
										<li><a href="">Resources</a></li>
										<li><a href="">Contact</a></li>
									</ul>
							
							
							<div id="content">
									<div id="col_left">
											<ul>
													<li><a href="">OVERVIEW</a></li>
													<li><a href="">DEVELOPMENT PARTNERS</a></li>														      
															<ul class="submenu" style="padding-left:15px">
																	<li><a href="">TESTIMONIALS</a></li>
																	<li><a href="">PROGRAMS</a></li>
																	<li><a href="">WHY PARTNER</a></li>
																	<li><a href="">CONTACT</a></li>
															</ul>
													<li><a href="">IMPLEMENTATION PARTNERS</a></li>
													<li><a href="">TECHNOLOGY ALLIANCES</a></li>
											</ul>
									</div>
									<div id="col_right">
											content will go here
									
									</div>
							</div>
							
							<div id="footer">
									<ul>
											<li><a href="">Support</a></li>
											<li><a href="">Investor Relations</a></li>
											<li><a href="">Terms of Use</a></li>
											<li><a href="">Privacy Poicy</a></li>
											<li><a href="">Site Map</a></li>
											<li><a href="">Site designed by Evoke Solutions</a></li>
									</ul>
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
