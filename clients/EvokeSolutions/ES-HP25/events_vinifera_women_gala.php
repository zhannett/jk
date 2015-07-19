<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Heller Productions Inc. - Event Gallery</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
		<!--[if IE]> <link href="css/ie.css" rel="stylesheet" /> <![endif]-->  
		<!--[if lt IE 7]> <link href="css/ie6.css" rel="stylesheet" /> <![endif]--> 
	</head>
	
	<body>
		<div id="mainWrapper">
			
				<?php include('inc/header_main.php') ?>
				<div id="header_top"></div>				
				<div id="banner_vinifera_event"></div>				
				<div id="header_bottom"></div>
				
				
				<div id="content">
						<div id="leftCol">
							<div id="leftColWrapper">
									<?php include('inc/menu_event_gallery.php') ?>
									<div class="spacer100"></div>
									<div id="learn_services">Services for this event</div>
									<ul id="services_for_event">
											<li class="link"><a href="services_fest.php">VIEW GALAS &gt;</a></li>
											<li class="link"><a href="">VIEW FUNDRAISERS &gt;</a></li>
									</ul>
							</div>
						</div>					
					
						<div id="rightCol">
							<div id="rightColWrapper">
									<h1>The Presidents Cup 2007</h1>
									<p>5 days, 500 clients (actual number TBC) and a thousand carefully managed details. While Tiger Woods, Mike Weir and friends provided the entertainment, Heller provided everything else. From arranging the tent to the transportation, we took care of all the many important details that define a successful event.</p>
									<div id="videoplayerblock">
											<div id="videoplayer"><img src="img/vinifera_main_event.jpg" width="300" height="248" alt="" /></div>
											<div id="videoplayer_comment">The TD Bank Financial Group entertained their top clients at President’s Cup in Montreal, Canada’s premier golf event.</div>
									</div>
									<div id="img_gallery_title">Image Slideshow - click thumbnail to launch</div>
									<ul class="gallery">
											<li><a href="img/vinifera_event_1.jpg" class="thickbox" title="title 1" rel="gallery"><img src="img/vinifera_event_thumb_1.jpg" width="88" height="88" alt="" /></a></li>
											<li><a href="img/vinifera_event_2.jpg" class="thickbox" title="title 2" rel="gallery"><img src="img/vinifera_event_thumb_2.jpg" width="88" height="88" alt="" /></a></li>
											<li><a href="img/vinifera_event_3.jpg" class="thickbox" title="title 3" rel="gallery"><img src="img/vinifera_event_thumb_3.jpg" width="88" height="88" alt="" /></a></li>
											<li><a href="img/vinifera_event_4.jpg" class="thickbox" title="title 4" rel="gallery"><img src="img/vinifera_event_thumb_4.jpg" width="88" height="88" alt="" /></a></li>
											<li><a href="img/vinifera_event_5.jpg" class="thickbox" title="title 5" rel="gallery"><img src="img/vinifera_event_thumb_5.jpg" width="88" height="88" alt="" /></a></li>
											<li><a href="img/vinifera_event_6.jpg" class="thickbox" title="title 6" rel="gallery"><img src="img/vinifera_event_thumb_6.jpg" width="88" height="88" alt="" /></a></li>
									</ul>
							</div>
					</div>
					</div>
				<?php include('inc/footer.php') ?>				
			
		</div>
		
		<?php include('inc/js_hover.php') ?>
		<script type="text/javascript">
				$('li#main_event_gallery>span') .css('height','50px') .css('position','relative') .css('top','20px') .css('background','url(img/swirl.gif) top center no-repeat');
				$('li#main_event_gallery>span>span>a') .css('text-decoration','underline');
				$('li#vinifera>a') .css('color','#EC0B8D') .css('text-decoration','underline');
		</script>
		<script type="text/javascript" src="js/thickbox_min.js"></script> 		
	</body>
</html>