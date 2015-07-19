<?php
	date_default_timezone_set('America/Toronto');
	$datetime = date_create();  
?> 
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title><?php echo $page_title; ?></title>			
			<meta name="author" content="Janet (Zhanna) Kulyk" />
			<meta name="keywords" content="<?php echo $page_keywords; ?>" />
			<meta name="description" content="<?php echo $page_desc; ?>" />						
			<link rel="stylesheet" type="text/css" href="css/jk.css" media="screen" />
			<?php echo $google_site_verification; ?>
			<script type="text/javascript" src="js/optim.js"></script>
			<script type="text/javascript" src="js/rotators.js"></script>
	</head>
	
	<?php flush(); ?>
	
  	<body>	
	
		<div id="banner">
			<div class="bg_top"></div>
			<div id="logo"><a href="http://janetkulyk.com">www.janetkulyk.com</a></div>										
			<div id="date_time"><span id="date"><?php echo date_format($datetime, "l, F j, Y");?></span><span id="clock">&nbsp;</span></div>
			<div class="bg_bottom"></div>
	    </div>
							
							
		<div id="doc4" class="yui-t1">
			
			<div id="hd">
				
				<div class="bg_nav">
					<div id="navtop" class="page">
						<?php include("inc/topNav.php") ?>
						<div id="date_switcher"><?php //include("inc/switcher.inc"); ?></div>							
						
													
						<ul id="menu_login">			
							<?php
								if (isset($_SESSION['user_id'])) {					
									// Add the logout link:
									echo '<li><a href="logout.php">Logout</a></li>
										  <li><a href="change_password.php">Change My Password</a></li>';					
								} else {				
									// Register, login, and change_password links:
									echo '<li><a href="register.php">Register</a></li>
										<li><a href="login.php">Login</a></li>';					
								}
							?>				
						</ul>		
						
						
						<?php
							if (isset($_SESSION['user_id'])) {												
								echo '<div class="hello">Hello ' . $_SESSION['first_name'] . '!</div>';					
							}
						?>								
					</div>					
				</div>
				
			</div>	
				
	
		
			<div id="bd">						
				
		
		
			
		
		
							
					
				
				
				
				
				
				
				
				
		