<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Gorrie Marketing - Page1</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<!--[if IE]> <link href="css/ie.css" rel="stylesheet" /> <![endif]-->  
		<!--[if lt IE 7]> <link href="css/ie6.css" rel="stylesheet" /> <![endif]-->			
	</head>
	
	<body>
		<div id="mainWrapper">
			
				<div id="header">	
					<?php include('inc/logo.php') ?>
					<div id="mainNav">
							<?php include('inc/header1_active.php') ?>		
							<?php include('inc/header2.php') ?>	
							<?php include('inc/header3.php') ?>
					</div>
					<?php include('inc/links.php') ?>
				</div>						
						
				  <div id="content">
							<div id="leftCol">
									<div id="leftColWrapper">
											<ul class="orange">
													<li><a href="">CONSUMERS</a></li>
													<li><a href="">MISSION &amp; PHILOSOPHY</a></li>
													<li><a href="">IN-STORE INSIGHTS</a></li>
													<li><a href="">BRAND EXPERIENCES</a></li>
											</ul>		
											<div id="view_case"><a href="">View Case Studies &gt;</a></div>							
									</div>
							</div>					
					
							<div id="rightCol">
										<div id="rightColWrapper">
												<h1>ET UNIM AD MINIM VENIAM, QUISNOSTRUD EXERC. IRURE DOLOR. NAM</h1>
												<div class="content_txt">
														<div class="col_left">														
																<h2>TIME-TESTED QUALITY</h2>
																<p class="p_narrow">Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Et harumd und lookum like Greek to me, dereud facilis est er expedit distinct.onsectetur adipiscing elit, sed ut labore et dolore magna aliquam makes one wonder who would ever read this stuff?</p>
														</div>
														<div class="col_right">
																<h2>OUR APPROACH</h2>
																<p class="p_narrow">Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
														</div>
												</div>												
												<div class="thumbs">
														<div class="col_left">
																<div class="thumb1"><img src="img/thumb1.gif" width="135" height="135" alt="" /></div>
																<div class="thumb2"><img src="img/thumb2.gif" width="135" height="135" alt="" /></div>
														</div>
														<div class="col_right">
																<div class="thumb1"><img src="img/thumb1.gif" width="135" height="135" alt="" /></div>
																<div class="thumb2"><img src="img/thumb2.gif" width="135" height="135" alt="" /></div>
														</div>
												</div>
												<p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
												<p><a href="">Learn more &gt;</a></p>
												<?php include('inc/footer.php') ?>
							</div>					
				  </div>			
		</div>
				<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
				<script type="text/javascript">			
					$(document).ready(function() {				
						//$('#understand_container') .hover(function(){$('#understand') .addClass('understand_active');}, function(){$('#subnav_understand') .removeClass('understand_active');});
						//$('#understand_container') .hover(function(){$('#subnav_understand') .removeClass('hidden');}, function(){$('#subnav_understand') .addClass('hidden');});
						
						$('#develop_container') .hover(function(){$('#develop') .addClass('develop_active');}, function(){$('#subnav_develop') .removeClass('develop_active');});
						$('#develop_container') .hover(function(){$('#subnav_develop') .removeClass('hidden');}, function(){$('#subnav_develop') .addClass('hidden');});
						
						$('#succeed_container') .hover(function(){$('#succeed') .addClass('succeed_active');}, function(){$('#subnav_succeed') .removeClass('succeed_active');});
						$('#succeed_container') .hover(function(){$('#subnav_succeed') .removeClass('hidden');}, function(){$('#subnav_succeed') .addClass('hidden');});
											
						//$('#understand') .toggle(function(){$('#subnav_understand').addClass('hidden');}, function() {$('#subnav_understand').removeClass('hidden');});									
						//$('#understand') .hover(function(){$(this).addClass('understand_active')}, function(){$(this).removeClass('understand_active');});	
						//$('#understand') .hover(function(){$('#understand>a').css('color','#FFF')}, function(){$('#understand>a').css('color','#1A1A1A');});
											
						$('#develop') .toggle(function(){$('#subnav_develop').addClass('hidden');}, function() {$('#subnav_develop').removeClass('hidden');});									
						$('#develop') .hover(function(){$(this).addClass('develop_active');}, function(){$(this).removeClass('develop_active');});
						$('#develop') .hover(function(){$('#develop>a').css('color','#FFF')}, function(){$('#develop>a').css('color','#1A1A1A');});	
						
						$('#succeed') .toggle(function(){$('#subnav_succeed').addClass('hidden');}, function() {$('#subnav_succeed').removeClass('hidden');});								
						$('#succeed') .hover(function(){$(this).addClass('succeed_active');}, function(){$(this).removeClass('succeed_active');});
						$('#succeed') .hover(function(){$('#succeed>a').css('color','#FFF')}, function(){$('#succeed>a').css('color','#1A1A1A');});	
				
						//$('#subnav_understand>ul>li') .hover(function(){$('#understand').addClass('understand_active');}, function(){$('#understand').removeClass('understand_active');});
						//$('#subnav_understand>ul>li') .hover(function(){$('#understand>a').css('color','#FFF');}, function(){$('#understand>a').css('color','#1A1A1A');});	
						$('#subnav_understand>ul>li') .hover(function(){$(this).addClass('arrow_orange');}, function(){$(this).removeClass('arrow_orange');});	
						
						$('#subnav_develop>ul>li') .hover(function(){$('#develop').addClass('develop_active');}, function(){$('#develop').removeClass('develop_active');});
						$('#subnav_develop>ul>li') .hover(function(){$('#develop>a').css('color','#FFF');}, function(){$('#develop>a').css('color','#1A1A1A');});	
						$('#subnav_develop>ul>li') .hover(function(){$(this).addClass('arrow_green');}, function(){$(this).removeClass('arrow_green');});
						
						$('#subnav_succeed>ul>li') .hover(function(){$('#succeed').addClass('succeed_active');}, function(){$('#succeed').removeClass('succeed_active');});
						$('#subnav_succeed>ul>li') .hover(function(){$('#succeed>a').css('color','#FFF');}, function(){$('#succeed>a').css('color','#1A1A1A');});	
						$('#subnav_succeed>ul>li') .hover(function(){$(this).addClass('arrow_red');}, function(){$(this).removeClass('arrow_red');});
						
						$('#links>ul>li') .hover(function(){$(this).addClass('arrow_orange');}, function(){$(this).removeClass('arrow_orange');});
									
						$('#content>#leftCol>#leftColWrapper>ul.orange>li') .hover(function(){$(this).addClass('arrow_orange');}, function(){$(this).removeClass('arrow_orange');});
						$('#content>#leftCol>#leftColWrapper>ul.green>li') .hover(function(){$(this).addClass('arrow_green');}, function(){$(this).removeClass('arrow_green');});
						$('#content>#leftCol>#leftColWrapper>ul.red>li') .hover(function(){$(this).addClass('arrow_red');}, function(){$(this).removeClass('arrow_red');});
						
					});					
				</script> 			
	</body>
</html>