<?php
/*
	$browser  =  $HTTP_USER_AGENT ;
	$ip  =  $REMOTE_ADDR ;
	$refer = $HTTP_REFERER;
	$db  =  mysql_connect ( "localhost" , "root" , "" );
	mysql_select_db ( "statistics" , $db );
	$sql  =  "INSERT INTO table_name(ip,browser,received) VALUES('$ip','$browser',now())" ;
	$results  =  mysql_query ( $sql);
*/
?>
<?php $today = $today = date("l, F j, Y");  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
		<title>Contact Information</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
	</head>
	
	<body onload="load()" onunload="GUnload()">
	  	<div id="mainContainer">		
				<?php include("inc/header.inc") ?>
				<?php include("inc/w3c.inc") ?>			
				<div id="contentColumn">
					<div id="contact">
							<div id="topNav">
									<ul>
											<li><a href="index.php"><span class="white">Home</span></a></li>
											<li><a href="skills.php">Computer Skills</a></li>
											<li><a href="portfolio.php">Portfolio</a></li>
											<li><a href="education.php">Education</a></li>
											<li class="current"><a href="contact.php">Contact Information</a></li>
									</ul>
							</div>									
							<div id="date_switcher">
								<?php include("inc/date.php") ?>
								<?php include("inc/switcher.inc"); ?>	
							</div>
							
									<img src="img/me_with_ron_jeremy.jpg" width="600" height="450" alt"Me with Ron Jeremy" />
									
							</div>				 
						</div>						
						<?php include("inc/footer.inc"); ?>				
			</div>
			
			<script type="text/javascript" src="js/js_lib.js"></script>
			<script type="text/javascript" src="js/clock.js"></script>
			<script type="text/javascript" src="scripts/jquery.js"></script>
			<script type="text/javascript" src="scripts/textSizeSwitcher.js"></script> 
			<script type="text/javascript" src="scripts/button_animation.js"></script> 
  </body>
</html>