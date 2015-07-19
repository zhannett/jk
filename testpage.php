<?php $today = $today = date("l, F j, Y");  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>Janet (Zhanna) Kulyk - Education</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />		
		<link rel="stylesheet" type="text/css" href="css/base.css" />  
 		<script type="text/javascript" src="js/js_lib.js"></script>
	</head>
	<body onload="MM_preloadImages('images/banner.jpg','images/iaod.gif','images/kgu1.gif','images/KGU.jpg','images/kpi1.gif','images/bg.jpg')" >
		<div class="page bgFFFFFF">
		  	<?php include("inc/header.inc") ?>			
			<div class="fl w100 pt20">
				<div class="h50"></div>
				<p><a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a></p>
				<p><a href="http://jigsaw.w3.org/css-validator/"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a></p>
			</div>		
									
			<div class="fl w625 wrapper3">			
				<div class="right FF0099"><?php echo $today; ?>&nbsp;&nbsp;</div>
				<div>&nbsp;</div>
				<div class="menubar">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="skills.php">Computer Skills</a></li>
						<li><a href="portfolio.php">Portfolio</a></li>
						<li><a href="education.php"><span class="FFFFFF">Education</span></a></li>
						<li><a href="contact.php">Contact Information</a></li>
					</ul>
				</div>	
				<div>&nbsp;</div>	
					  
				<div class="wrapper">	  
					<h1>Photogallery</h1>					
					<?php		
						$folderPath_icon = "images/photo/halloween/icons/";	
						$folderPath_img = "images/photo/halloween/";		
						$d = opendir($folderPath_icon) or die($php_errormsg);
						$i = 0;					
					
						while (false !== ($f = readdir($d))) {
							if (is_file($folderPath_icon . $f)) {
								$icon_filename = $folderPath_icon . $f;		
								$icon_size = getimagesize($icon_filename);				
								$icon_w = $icon_size[0];
								$icon_h = $icon_size[1];
				
								$img_filename = $folderPath_img . $f;	
								
								print "<div class='fl w100 content3'>";		
								$string = "<a href='javascript:popp(\"$img_filename\")'><img src='$icon_filename' width='$icon_w' height='$icon_h' alt=''/></a>";				
								$string = "<div class='photo'>" . $string . "</div>";
								print $string . "</div>";	
								if($i%4==3) print "<div class='clear'></div>";	
								$i++;								
							} 							
						}	
					?>						
				</div>			
	  		 </div>
			<div class="clear"></div>
		<?php include("inc/footer.inc"); ?>				
	</div>   
  </body>
</html>








