<?php
	date_default_timezone_set('America/Toronto');
	$datetime = date_create(); 
		
	// Figure out which browser the user is using
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	if (preg_match('/Firefox/i', $user_agent)){
		$browser = "ff";
	} else if (preg_match('/MSIE.9/i', $user_agent)) {
		$browser = "ie ie9";
	} else if (preg_match('/MSIE.10/i', $user_agent)) {
		$browser = "ie ie10";
	} else if (preg_match('/MSIE.8/i', $user_agent)) {
		$browser = "ie ie8";
	} else if (preg_match('/MSIE.7/i', $user_agent)) {
		$browser = "ie ie7";
	} else if (preg_match('/MSIE.6/i', $user_agent)) {
		$browser = "ie ie6";
	} else if (preg_match('/Chrome/i', $user_agent)) {
		$browser = "chrome";
	} else if (preg_match('/Safari/i', $user_agent)) {
		$browser = "safari";
	} else {
		$browser = "in_unknown";
	}
?> 
	
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-us"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en-us"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en-us"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-us"> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title><?php echo $page_title; ?></title>
		<meta name="author" content="Janet (Zhanna) Kulyk" />
		<meta name="keywords" content="<?php echo $page_keywords; ?>" />
		<meta name="description" content="<?php echo $page_desc; ?>" />
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<?php /* Place favicon.ico and apple-touch-icon.png in the root directory */ ?>
		<link rel="alternate" media="handheld" type="application/xhtml+xml" href="http://m.janetkulyk.com/" />
		<?php /*
		<link rel="stylesheet" href="css/yahoo.css" media="screen, projection">
		<link rel="stylesheet" href="css/normalize.css" media="screen, projection">
		<link rel="stylesheet" href="css/main.css" media="screen, projection">
		<link rel="stylesheet" type="text/css" href="css/jk.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="css/topnav.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="css/sticky-navigation.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="css/accordion.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="css/modal.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="css/rwd.css" media="screen, projection" />*/ ?>
												      
		<?php /*<link rel="stylesheet" type="text/css" href="css/styles-min.css" media="screen, projection" /> */ ?>	
		<link rel="stylesheet" type="text/css" href="http://janetkulyk.s3.amazonaws.com/css/styles-min.gz.css" media="screen, projection" />
		<?php /*<link rel="stylesheet" type="text/css" href="http://janetkulyk.s3.amazonaws.com/css/styles-min.css" media="screen, projection" /> */ ?>
		<?php echo $google_site_verification; ?>
		<!--<link href="https://plus.google.com/{plusPageUrl}" rel="publisher" />-->
	</head>
	
	<?php flush(); ?>
	
  	<body class="<?php echo $browser ?>">
		<header role="banner">
			
			<div class="header_wrap clearfix">
				<div class="header">
					<?php /*<div style="height: 16px; background-image: -moz-linear-gradient(50% 10%, #fff, #e8e8e8); background-image: -webkit-gradient(linear, 50% 100%, 50% 0%, from (#fff), to (#e8e8e8));"></div> */ ?>
					
					<div class="url">
						<!--{JK}<a href="http://janetkulyk.com">www.janetkulyk.com</a>-->
						<div style="float: left; padding: 1px 0 0 1px; margin: 0; z-index: 100; height: 80px; text-align: left;line-height: 34px;padding: 0 1.5em; line-height: 4em">
							<span style="font-size:3em; color: #333; font-weight:bold">{JK}</span>
							<span style="font-size:2em; color: #e44d26">Janet Kulyk</span>
						</div>
					</div>
					<!--
					<div id="date_time" class="clearfix">
						<span id="date"><?php echo date_format($datetime, "l, F j, Y");?></span>
						<span id="clock" data-behavior="clock" >&nbsp;</span>
					</div>
					-->
				</div>
			</div>
			
		</header>
		
		<div id="main" role="main">					
			<?php include("topnav.php") ?>
			<?php /*!--<div id="date_switcher"><?php //include("inc/switcher.inc"); ?></div>*/?>					
			<div id="document" role="document" class="document clearfix">
				<section id="mainContent" class="clearfix">	