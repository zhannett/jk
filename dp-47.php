 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>Photogallery</title>		
		<link rel="stylesheet" type="text/css" href="styles/base.css" />
 		<script type="text/javascript" src="js/js_lib.js"></script>  
	</head>
	
	<body>
	  <div id="page">
			    <?php include("includes/header.php") ?>
			<div class="date"><?php echo $today; ?></div> 
	    <div>&nbsp;</div>
		<div id="menuBar">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="skills.php">Computer Skills</a></li>
				<li><a href="portfolio.php">Portfolio</a></li>
				<li><a href="education.php">Education</a></li>
				<li><a href="contact.php">Contact Information</a></li>				
			</ul>
		</div>	
		<div class="clear"></div>
		
		
			<div id="left">
				 <a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
			</div>
			<div>&nbsp;</div>
			<div class="content3" style=" font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#0000FF;">		
				SOME PICTURES FROM MY CANADIAN LIFE 2005 - 2006
			</div>
			
	<?php			
			$folderPath_icon = "images/photo/me/icons/";	
			$folderPath_img = "images/photo/me/";		
			$d = opendir($folderPath_icon) or die($php_errormsg);
			$i = 0;
		
			while (false !== ($f = readdir($d))) {
				if (is_file($folderPath_icon . $f)) {
					$icon_filename = $folderPath_icon . $f;		
					$icon_size = getimagesize($icon_filename);				
					$icon_w = $icon_size[0];
					$icon_h = $icon_size[1];
	
					$img_filename = $folderPath_img . $f;	
					
					if($i%4==0) print "<div class='content3'>";					
	
					$string = "<a href='javascript:popp(\"$img_filename\")'><img src='$icon_filename' width='$icon_w' height='$icon_h' alt=''/></a>";				
					$string = "<div class='photo'>" . $string . "</div>";
					print $string;					
					if($i%4==3) print "</div><div class='clear'></div>";
					$i++;
				}
			}		
	?>	
		
			<div class="clear"></div>
			</div> 
			</div>  
    </body>
</html>







