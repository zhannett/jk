<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>LEA-ANN BELTER - Home Page</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<!--[if IE]> <link href="css/ie.css" rel="stylesheet" /> <![endif]-->  
		<!--[if lt IE 7]> <link href="css/ie6.css" rel="stylesheet" /> <![endif]-->		
	</head>
	
	<body>
			<div id="mainWrapper">						
						<div id="content">
						
								<div id="leftCol">
										<div id="leftColWrapper">
												<img src="img/logo1.gif" width="154" height="25" alt="Lea-Ann Belter Bridal" />
												<div class="h55"></div>
												<?php include_once 'inc/nav.php' ?>
												<p class="copyright">&copy; 2008 Lea-Ann<br/>Belter Bridal</p>
												<p class="es">Site designed by<br/><a href="http://www.evokesolutions.com">Evoke Solutions</a></p>
										</div>
								</div>					
							
								<div id="rightCol">
											<div id="rightColWrapper">
													<img src="img/2009-Other-opt/Home_a-09.jpg" width="750" height="550" alt="" />
											</div>
								</div>
							
						</div>
			</div>
			
			<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
			<script type="text/javascript">						
					$('#nav>ul>li') .hover(function(){
							$(this) .children() .children() .addClass('active');				
					}, function() {				
							$(this) .children() .children() .removeClass('active');
					});					
					$('#home>a>.brackets') .css('color','#3998B1');
					$('#home>a') .css('color','#3998B1');				
			</script>				
	</body>
</html>