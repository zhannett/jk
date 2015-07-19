<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Gorrie Marketing - Home Page</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<!--[if IE]> <link href="css/ie.css" rel="stylesheet" /> <![endif]-->  
		<!--[if lt IE 7]> <link href="css/ie6.css" rel="stylesheet" /> <![endif]-->		
		<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
		<script type="text/javascript">			
			$(document).ready(function() {
					$('#understand') .toggle(function(){$('#subnav_understand').addClass('hidden');}, function() {$('#subnav_understand').removeClass('hidden');});									
					$('#understand') .hover(function(){$(this).addClass('understand_active')}, function(){$(this).removeClass('understand_active');});	
					$('#understand') .hover(function(){$('#understand>a').css('color','#FFF')}, function(){$('#understand>a').css('color','#1A1A1A');});
					
					$('#develop') .toggle(function(){$('#subnav_develop').addClass('hidden');}, function() {$('#subnav_develop').removeClass('hidden');});									
					$('#develop') .hover(function(){$(this).addClass('develop_active');}, function(){$(this).removeClass('develop_active');});
					$('#develop') .hover(function(){$('#develop>a').css('color','#FFF')}, function(){$('#develop>a').css('color','#1A1A1A');});	
					
					$('#succeed') .toggle(function(){$('#subnav_succeed').addClass('hidden');}, function() {$('#subnav_succeed').removeClass('hidden');});								
					$('#succeed') .hover(function(){$(this).addClass('succeed_active');}, function(){$(this).removeClass('succeed_active');});
					$('#succeed') .hover(function(){$('#succeed>a').css('color','#FFF')}, function(){$('#succeed>a').css('color','#1A1A1A');});	

					$('#subnav_understand>ul>li') .hover(function(){$('#understand').addClass('understand_active');}, function(){$('#understand').removeClass('understand_active');});
					$('#subnav_understand>ul>li') .hover(function(){$('#understand>a').css('color','#FFF');}, function(){$('#understand>a').css('color','#1A1A1A');});	
					$('#subnav_understand>ul>li') .hover(function(){$(this).addClass('arrow_orange');}, function(){$(this).removeClass('arrow_orange');});	
					
					$('#subnav_develop>ul>li') .hover(function(){$('#develop').addClass('develop_active');}, function(){$('#develop').removeClass('develop_active');});
					$('#subnav_develop>ul>li') .hover(function(){$('#develop>a').css('color','#FFF');}, function(){$('#develop>a').css('color','#1A1A1A');});	
					$('#subnav_develop>ul>li') .hover(function(){$(this).addClass('arrow_green');}, function(){$(this).removeClass('arrow_green');});
					
					$('#subnav_succeed>ul>li') .hover(function(){$('#succeed').addClass('succeed_active');}, function(){$('#succeed').removeClass('succeed_active');});
					$('#subnav_succeed>ul>li') .hover(function(){$('#succeed>a').css('color','#FFF');}, function(){$('#succeed>a').css('color','#1A1A1A');});	
					$('#subnav_succeed>ul>li') .hover(function(){$(this).addClass('arrow_red');}, function(){$(this).removeClass('arrow_red');});
					
					$('#links>ul>li') .hover(function(){$(this).addClass('arrow_orange');}, function(){$(this).removeClass('arrow_orange');});
								
					$('#content>#leftCol>#leftColWrapper>ul>li') .hover(function(){$(this).addClass('arrow_orange');}, function(){$(this).removeClass('arrow_orange');});
					
					
					
					$('#content>#leftCol>#leftColWrapper>ul a:path').parent().css('border','1px solid #C00');			
					//$('mainNav>ul a:path').parent().addClass('active');
					//$('mainNav>ul a:current').each(function){$(this).replaceWith($(this).text());});
			});					
		</script> 
		
		
	</head>
	
	<body>
		<div id="mainWrapper">
			
			
				<div id="header">
						<div id="logo">
								<a href="index.php"><img src="img/logo.gif" width="149" height="25" title="Gorrie Marketing" alt="Gorrie Marketing" /></a>
						</div>
						<div id="mainNav">
								<div class="wrapper">
										<div id="understand"><a href="">UNDERSTAND</a></div>
										<div id="subnav_understand">
											<ul>
												<li><a href="consumers.php">CONSUMERS</a></li>
												<li><a href="yourbusiness.php">YOUR BUSINESS</a></li>
												<li><a href="experience.php">EXPERIENCE</a></li>
											</ul>
										</div>
								</div>
								<div class="wrapper">
										<div id="develop"><a href="">DEVELOP</a></div>
										<div id="subnav_develop">
											<ul>
												<li><a href="strategy.php">STRATEGY</a></li>
												<li><a href="solutions.php">SOLUTIONS</a></li>
												<li><a href="support.php">SUPPORT</a></li>
											</ul>
										</div>
								</div>
								<div class="wrapper">
										<div id="succeed"><a href="">SUCCEED</a></div>	
										<div id="subnav_succeed">
											<ul>
												<li><a href="success_stories.php">SUCCESS STORIES</a></li>
												<li><a href="case_studies.php">CASE STUDIES</a></li>
											</ul>
										</div>
								</div>	
						</div>
						<div id="links">
								<ul>
										<li><a href=news.php>NEWS</a></li>
										<li><a href="contact.php">CONTACT</a></li>
										<li><a href=clogin.php"">CAREERS</a></li>
										<li><a href="careers.php">LOGIN</a></li>
										<li><a href="more.php">MORE</a></li>
								</ul>
						</div>
				</div>
					
						
						
				  <div id="content">
							<div id="leftCol">
									<div id="leftColWrapper">
											<div class="bg_red"><span>CHOOSE A CASE STUDY</span></div>	
											<form ig="" method="" action="">
													<div class="select">
															<select id="byindustry" name="byindustry">
																	<option selected>BY INDUSTRY</option>
																	<option>Advertising</option>
																	<option>IT</option>
																	<option>Telecommunications</option>
																	<option>Web Design</option>
															</select>
													</div>
													<div class="select">
															<select id="byservice" name="byservice">
																	<option selected>BY SERVICE</option>
																	<option>service 1</option>
																	<option>service 2</option>
																	<option>service 3</option>
																	<option>service 4</option>
															</select>
													</div>
													<div class="select">
															<select id="byclient" name="byclient">
																	<option selected>BY CLIENT</option>
																	<option>client 1</option>
																	<option>client 2</option>
																	<option>client 3</option>
																	<option>client 4</option>
															</select>
													</div>
											</form>	
											<div class="spacer100"></div>										
											<div class="bg_red"><span>SERVICES LEGEND</span></div>
											<div id="img_tools"></div>
											<ul id="tools">
													<li><a href="">Install &gt;</a></li>
													<li><a href="">Interactive &gt;</a></li>
													<li><a href="">Promotion &gt;</a></li>
													<li><a href="">Retail &gt;</a></li>
													<li><a href="">Display &gt;</a></li>
											</ul>
									</div>
							</div>					
					
					
							<div id="rightCol">
										<div id="rightColWrapper">
												
										</div>										
							</div>					
				  </div>
					<?php include('inc/footer.php') ?>
			
		</div>
		
	</body>
</html>