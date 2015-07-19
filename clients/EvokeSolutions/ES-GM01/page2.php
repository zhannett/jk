<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Gorrie Marketing - Page 2</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<!--[if IE]> <link href="css/ie.css" rel="stylesheet" /> <![endif]-->  
		<!--[if lt IE 7]> <link href="css/ie6.css" rel="stylesheet" /> <![endif]-->	
		<script type="text/javascript">						
					function displayImg(srcVal,widthVal,heightVal,altVal) {																					
							var removeObject = document.getElementById("gallery_image").firstChild;
							removeObject.parentNode.removeChild(removeObject);
							var newImageElement = document.createElement('img');
							newImageElement.setAttribute('src',srcVal);
							newImageElement.setAttribute('width',widthVal);
							newImageElement.setAttribute('height',heightVal);
							newImageElement.setAttribute('alt',altVal);
							document.getElementById("gallery_image").appendChild(newImageElement);
							document.getElementById("img_title").innerHTML = altVal;
					}
					
					function prevImage() {
							var curImg = document.getElementById("gallery_image").firstChild;
							showImage( prev( curImage ) );		
							return false;
					}
					
					function nextImage() {// Find the next image and show it
							showImage( next( curImage ) );// Locate the next gallery image and show it							
							return false;// Prevent the link from operating as normal
					}
					
					var images = new Array();
					images[0] = new Array('img/img1.gif','340','230','Benjamin Moore tradeshow booth rendering');
					images[1] = "'img/img1.gif','340','230','Benjamin Moore tradeshow booth rendering'";
					images[2] = "'img/img1.gif','340','230','Benjamin Moore tradeshow booth rendering'";
					images[3] = "'img/img1.gif','340','230','Benjamin Moore tradeshow booth rendering'";
					images[4] = "'img/img1.gif','340','230','Benjamin Moore tradeshow booth rendering'";
					images[5] = "'img/img1.gif','340','230','Benjamin Moore tradeshow booth rendering'";
					images[6] = "'img/img1.gif','340','230','Benjamin Moore tradeshow booth rendering'";
					images[7] = "'img/img1.gif','340','230','Benjamin Moore tradeshow booth rendering'";
			</script>
	</head>
	
	<body>
		<div id="dvl">
				<div id="mainWrapper">	
					
				<div id="header">	
					<?php include('inc/logo.php') ?>
					<div id="mainNav">
							<?php include('inc/header1.php') ?>		
							<?php include('inc/header2_active.php') ?>	
							<?php include('inc/header3.php') ?>
					</div>
					<?php include('inc/links.php') ?>
				</div>							
								
							<div id="content">
									<div id="leftCol">
											<div id="leftColWrapper">
													<ul class="green">
															<li><a href="">DISPLAY SOLUTIONS</a></li>
															<li><a href="">RETAIL SOLUTIONS</a></li>
															<li><a href="">INTERACTIVE SOLUTIONS</a></li>
															<li><a href="">SALES PROMOTION SOLUTIONS</a></li>
															<li><a href="">INSTALLATION SOLUTIONS</a></li>
													</ul>		
													<h1>STAND OUT FROM THE CROWD; SOLUTIONS THAT MAKE AN IMPACT</h1>
													<p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>					
											</div>
									</div>					
							
									<div id="rightCol">
											<div id="rightColWrapper">
													<div id="img_gallery">
															<div id="gallery_image"><img src="img/img1.gif" width="340" height="230" alt="" /></div>
															<div id="right_quot">
																	<blockquote>"Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</blockquote>
																	<div id="author">Jane Smith<br/>President, Benjamin<br/>Moore</div>
															</div>
															<div id="pagination">															
																	<a href="" onclick="prevImage()"><img src="img/btn_prev.gif" width="14" height="14" alt="" /></a>&nbsp<a href=""><img src="img/btn_next.gif" width="14" height="14" alt="" /></a>
																	<ul class="gallery" title="Image Gallery">
																			<li><a href="javascript:void('')" onclick="displayImg('img/img1.gif','340','230','Benjamin Moore tradeshow booth rendering')">1</a></li>
																			<li><a href="javascript:void('')" onclick="displayImg('img/img2.gif','340','230','Rose')">2</a></li>
																			<li><a href="javascript:void('')" onclick="displayImg('img/img3.gif','340','230','Bon Echo')">3</a></li>
																			<li><a href="javascript:void('')" onclick="displayImg('img/img4.gif','340','230','Nevada from the skies')">4</a></li>
																			<li><a href="javascript:void('')" onclick="displayImg('img/img5.gif','340','230','San Francisco')">5</a></li>
																			<li><a href="javascript:void('')" onclick="displayImg('img/img6.gif','340','230','Lion')">6</a></li>
																			<li><a href="javascript:void('')" onclick="displayImg('img/img7.gif','340','230','Lonely Sailor')">7</a></li>
																			<li><a href="javascript:void('')" onclick="displayImg('img/img8.gif','340','230','Flowers')">8</a></li>																			
																	</ul>
																	<div id="img_title">***Benjamin Moore tradeshow booth rendering	</div>
													</div>
													</div>
													<h2>SUBHEAD 1</h2>
													<p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
													<h2>SUBHEAD DOLOR SIT 2</h2>
													<p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
													<h2>SUBHEAD IPSUM SUBHEAD 3</h2>
													<p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
													<h2>FOUR SOCIIS NATUOQU</h2>
													<p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
											</div>					
									</div>	
									<?php include('inc/footer.php') ?>		
						</div>
				</div>
				<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
				<script type="text/javascript">			
					$(document).ready(function() {				
						$('#understand_container') .hover(function(){$('#understand') .addClass('understand_active');}, function(){$('#subnav_understand') .removeClass('understand_active');});
						$('#understand_container') .hover(function(){$('#subnav_understand') .removeClass('hidden');}, function(){$('#subnav_understand') .addClass('hidden');});
						
						//$('#develop_container') .hover(function(){$('#develop') .addClass('develop_active');}, function(){$('#subnav_develop') .removeClass('develop_active');});
						//$('#develop_container') .hover(function(){$('#subnav_develop') .removeClass('hidden');}, function(){$('#subnav_develop') .addClass('hidden');});
						
						$('#succeed_container') .hover(function(){$('#succeed') .addClass('succeed_active');}, function(){$('#subnav_succeed') .removeClass('succeed_active');});
						$('#succeed_container') .hover(function(){$('#subnav_succeed') .removeClass('hidden');}, function(){$('#subnav_succeed') .addClass('hidden');});
											
						$('#understand') .toggle(function(){$('#subnav_understand').addClass('hidden');}, function() {$('#subnav_understand').removeClass('hidden');});									
						$('#understand') .hover(function(){$(this).addClass('understand_active')}, function(){$(this).removeClass('understand_active');});	
						$('#understand') .hover(function(){$('#understand>a').css('color','#FFF')}, function(){$('#understand>a').css('color','#1A1A1A');});
											
						//$('#develop') .toggle(function(){$('#subnav_develop').addClass('hidden');}, function() {$('#subnav_develop').removeClass('hidden');});									
						//$('#develop') .hover(function(){$(this).addClass('develop_active');}, function(){$(this).removeClass('develop_active');});
						//$('#develop') .hover(function(){$('#develop>a').css('color','#FFF')}, function(){$('#develop>a').css('color','#1A1A1A');});	
						
						$('#succeed') .toggle(function(){$('#subnav_succeed').addClass('hidden');}, function() {$('#subnav_succeed').removeClass('hidden');});								
						$('#succeed') .hover(function(){$(this).addClass('succeed_active');}, function(){$(this).removeClass('succeed_active');});
						$('#succeed') .hover(function(){$('#succeed>a').css('color','#FFF')}, function(){$('#succeed>a').css('color','#1A1A1A');});	
				
						$('#subnav_understand>ul>li') .hover(function(){$('#understand').addClass('understand_active');}, function(){$('#understand').removeClass('understand_active');});
						$('#subnav_understand>ul>li') .hover(function(){$('#understand>a').css('color','#FFF');}, function(){$('#understand>a').css('color','#1A1A1A');});	
						$('#subnav_understand>ul>li') .hover(function(){$(this).addClass('arrow_orange');}, function(){$(this).removeClass('arrow_orange');});	
						
						//$('#subnav_develop>ul>li') .hover(function(){$('#develop').addClass('develop_active');}, function(){$('#develop').removeClass('develop_active');});
						//$('#subnav_develop>ul>li') .hover(function(){$('#develop>a').css('color','#FFF');}, function(){$('#develop>a').css('color','#1A1A1A');});	
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