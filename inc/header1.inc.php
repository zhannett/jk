<?php
	date_default_timezone_set('America/Toronto');
	$datetime = date_create(); 
		
	// Figure out which browser the user is using
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	if (preg_match('/Firefox.2/i', $user_agent)){
		$browser = "ff ff2";
	} else if (preg_match('/Firefox.3/i', $user_agent)) {
		$browser = "ff ff3";
	} else if (preg_match('/Firefox.3.0/i', $user_agent)) {
		$browser = "ff ff30";
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
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title><?php echo $page_title; ?></title>			
			<meta name="author" content="Janet (Zhanna) Kulyk" />
			<meta name="keywords" content="<?php echo $page_keywords; ?>" />
			<meta name="description" content="<?php echo $page_desc; ?>" />	
			<link rel="stylesheet" type="text/css" href="<?php echo $page_css; ?>" media="screen" />						
			<link rel="stylesheet" type="text/css" href="css/jk-min.css" media="screen" />
			<?php echo $google_site_verification; ?>
	</head>
	
	<?php flush(); ?>
	