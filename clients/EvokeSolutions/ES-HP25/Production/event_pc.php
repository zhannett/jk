<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Heller Productions Inc. - Event Gallery</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<!--[if IE]> <link href="css/ie.css" rel="stylesheet" /> <![endif]-->  
		<!--[if lt IE 7]> <link href="css/ie6.css" rel="stylesheet" /> <![endif]-->  		
	</head>
	
	<body>
		<div id="mainWrapper">
			<div id="mainContainer">
				<div id="header">
						<div id="logo">
								<a href="index.php"><img src="img/logo.gif" width="190" height="10" title="Heller Productions Inc." alt="Heller Productions Inc." /></a>
								<div id="logotype"><img src="img/h.gif" width="70" height="70" alt="Heller Productions Logo" /></div>
						</div>
						<?php include('inc/mainNav.php') ?>
				</div>
				<div id="header_top"></div>				
				<div id="banner_event_gallery"></div>				
				<div id="header_bottom"></div>
				
								
				<div id="content">
						<div id="leftCol">
							<div id="leftColWrapper">
									<?php include('inc/menu_event_gallery.php') ?>
									<div class="spacer100"></div>
									<div id="learn_services">Services for this event</div>
									<div class="link"><a href="services_fest.php">VIEW GALAS &gt;</a></div>
									<div class="link"><a href="">VIEW FUNDRAISERS &gt;</a></div>
							</div>
						</div>					
					
						<div id="rightCol">
							<div id="rightColWrapper">
									<h1>The Presidents Cup 2007</h1>
									<p>5 days, 500 clients (actual number TBC) and a thousand carefully managed details. While Tiger Woods, Mike Weir and friends provided the entertainment, Heller provided everything else. From arranging the tent to the transportation, we took care of all the many important details that define a successful event.</p>
									<div class="spacer25"></div>
									<div id="videoplayer"><img src="img/videoplayer.gif" width="332" height="278" alt="" /></div>
									<div id="videoplayer_comment">The TD Bank Financial Group entertained their top clients at President’s Cup in Montreal, Canada’s premier golf event.</div>
									<div class="spacer25"></div>
										<div class="col5"><a href=""><img src="img/gala1.gif" width="90" height="90" alt="" /></a></div>
										<div class="col5"><a href=""><img src="img/gala2.gif" width="90" height="90" alt="" /></a></div>
										<div class="col5"><a href=""><img src="img/gala3.gif" width="90" height="90" alt="" /></a></div>
										<div class="col5"><a href=""><img src="img/gala4.gif" width="90" height="90" alt="" /></a></div>
										<div class="col5"><a href=""><img src="img/gala5.gif" width="90" height="90" alt="" /></a></div>
										<div class="col5"><a href=""><img src="img/golf3.gif" width="90" height="90" alt="" /></a></div>
										<div class="col5"><a href=""><img src="img/foster.gif" width="90" height="90" alt="" /></a></div>
										<div class="col5"><a href=""><img src="img/img8.gif" width="90" height="90" alt="" /></a></div>
										<div class="col5"><a href=""><img src="img/golf4.gif" width="90" height="90" alt="" /></a></div>
										<div class="col5"><a href=""><img src="img/golf5.gif" width="90" height="90" alt="" /></a></div>
										<div class="col5"><a href=""><img src="img/gala1.gif" width="90" height="90" alt="" /></a></div>
										<div class="col5"><a href=""><img src="img/gala2.gif" width="90" height="90" alt="" /></a></div>
										<div class="col5"><a href=""><img src="img/gala3.gif" width="90" height="90" alt="" /></a></div>
										<div class="col5"><a href=""><img src="img/gala4.gif" width="90" height="90" alt="" /></a></div>
										<div class="col5"><a href=""><img src="img/gala5.gif" width="90" height="90" alt="" /></a></div>
										<div class="spacer25"></div>							
									</div>
							</div>
					</div>
				<?php include('inc/footer.php') ?>				
			</div>
		</div>
		<?php include('inc/js_hover.php') ?>
		<script type="text/javascript">
				$('li#main_event_gallery') .addClass('active');
				$('li#event_pc>a') .css('color','#EC0B8D') .css('text-decoration','underline');
		</script>
	</body>
</html>