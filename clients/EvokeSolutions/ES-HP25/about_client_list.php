<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Heller Productions Inc. - About Us</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<!--[if IE]> <link href="css/ie.css" rel="stylesheet" /> <![endif]-->  
		<!--[if lt IE 7]> <link href="css/ie6.css" rel="stylesheet" /> <![endif]-->  		
	</head>
	
	<body>
		<div id="mainWrapper">
			
				<?php include('inc/header_main.php') ?>
				<div id="header_top"></div>				
				<div id="banner_clientlist"></div>
				<div id="header_bottom"></div>
				
				<div id="content">
					<div id="leftCol">
						<div id="leftColWrapper">
								<?php include('inc/menu_about.php') ?>
								<div class="spacer100"></div>
								<div id="learn_services">Learn more about some of the services we have provided to these clients</div>
								<ul><li class="link"><a href="services.php">VIEW SERVICES &gt;</a></li></ul>
						</div>
					</div>
					
					
					<div id="rightCol">
						<div id="rightColWrapper">
							<h1>Client List</h1>
							<p>We’re proud to work with every one of our clients. Whether it’s a large international corporations or small private business, we work hard to make every event the most memorable once-in-a-lifetime occasion we’ve ever managed.</p>
							<div class="h15"></div>
							<ul class="gallery">
									<li><a href=""><img src="img/avaya.gif" width="88" height="88" alt="" /></a></li>
									<li><a href=""><img src="img/img_bell.gif" width="88" height="88" alt="" /></a></li>
									<li><a href=""><img src="img/golf1.gif" width="88" height="88" alt="" /></a></li>
									<li><a href=""><img src="img/wcm.gif" width="88" height="88" alt="" /></a></li>
									<li><a href=""><img src="img/tor.gif" width="88" height="88" alt="" /></a></li>
									<li><a href=""><img src="img/wcm.gif" width="88" height="88" alt="" /></a></li>
									<li><a href=""><img src="img/golf1.gif" width="88" height="88" alt="" /></a></li>
									<li><a href=""><img src="img/tor.gif" width="88" height="88" alt="" /></a></li>
									<li><a href=""><img src="img/avaya.gif" width="88" height="88" alt="" /></a></li>
									<li><a href=""><img src="img/img_bell.gif" width="88" height="88" alt="" /></a></li>
									<li><a href=""><img src="img/avaya.gif" width="88" height="88" alt="" /></a></li>
									<li><a href=""><img src="img/wcm.gif" width="88" height="88" alt="" /></a></li>
									<li><a href=""><img src="img/golf1.gif" width="88" height="88" alt="" /></a></li>
									<li><a href=""><img src="img/img_bell.gif" width="88" height="88" alt="" /></a></li>
									<li><a href=""><img src="img/tor.gif" width="88" height="88" alt="" /></a></li>
							</ul>
						</div>
					</div>
				<?php include('inc/footer.php') ?>				
			
		</div>
		<?php include('inc/js_hover.php') ?>
		<script type="text/javascript">
				$('li#main_about>span') .css('height','50px') .css('position','relative') .css('top','20px') .css('background','url(img/swirl.gif) top center no-repeat');
				$('li#main_about>span>span>a') .css('text-decoration','underline');
				$('li#clientlist>a') .css('color','#EC0B8D') .css('text-decoration','underline');
		</script>		

	</body>
</html>
