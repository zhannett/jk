<?php $today = $today = date("l, F j, Y");  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>KSP2007 - Ottawa River, August 4 - 6, 2007</title>	
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />	
		<link rel="stylesheet" type="text/css" href="css/photo.css" />
 		<script type="text/javascript" src="js/js_lib.js"></script>
	</head>
	
	<body>
	  <div class="page">
	    <?php include("inc/header.inc") ?>
			<div class="date"><?php echo $today; ?></div>		
			<?php		
						$folderPath_icon = "images/photo/ksp2007/icons/";	
						$folderPath_img = "images/photo/ksp2007/";		
						$d = opendir($folderPath_icon) or die($php_errormsg);
						$i = 0;
			?>
			<div class="icons">
			<?php
						while (false !== ($f = readdir($d))) {
							if (is_file($folderPath_icon . $f)) {
								$icon_filename = $folderPath_icon . $f;		
								$icon_size = getimagesize($icon_filename);				
								$icon_w = $icon_size[0];
								$icon_h = $icon_size[1];				
								$img_filename = $folderPath_img . $f;
								if($i%4==0) print "<div class='row'>";	
								$string = "<a href='javascript:popp(\"$img_filename\")'><img src='$icon_filename' width='$icon_w' height='$icon_h' alt=''/></a>";				
								$string = "<div class='photo'>" . $string . "</div>";
								print $string;					
								if($i%4==3) print "</div><div class='clear'></div>";
								$i++;
							}
						}	
				?>	
				
		</div>
		<div class="clear">&nbsp;</div> 
		<div class="r"><?php include("inc/footer.inc"); ?></div>				
	</div>   
  </body>
</html>