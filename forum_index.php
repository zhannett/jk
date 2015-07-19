<?php # Script 15.3 - index.php
		// This is the main page for the forum
		
		include ('inc/forum_header.inc.php');
		
		// The content on this page is introductory text
		// pulled from the database, based upon the 
		// selected language:
		
		echo '<div id="yui-main">
				<div class="yui-b">	
					<div class="yui-ge">
						<div class="yui-u first">
							<div id="main_content" class="resizable">';
		
		echo '<h1>' . $words['title'] . '</h1>'; 
		echo $words['intro'];		
		
		
		?>
		
		</div></div></div></div></div>
		
		</div>
		
		<?php include("inc/footer_new.inc.php"); ?>
		<script type="text/javascript" src="js/optim.js"></script>
		<script type="text/javascript">
			//<![CDATA[
			$('#sf-menu_forum>a') .css('background-color','#005A9C') .css('color','#FFF');
			//]]>
		</script>
		<?php include("inc/ga.php"); ?>
	</body>
</html>
		
		
?>
