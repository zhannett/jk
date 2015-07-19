<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();
	$page_title='Janet (Zhanna) Kulyk\'s Web Site - Web Development Services'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, freelancer, freelance developer, web freelancer, web development, interface, frontend, performanse, web 2.0, Toronto, Ontario, Canada'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering'; 
	include("inc/header_new.inc.php");  
?>
		<div class="aside_left" role="complementary">
			<?php //include("inc/w3c.inc") ?>
			GWT
		</div>
		<div id="mainSection">
			<div class="main_content">							
				<h1>Game: Hangman</h1>
				<h2>Guess the Movie Name</h2>
				<div id="game"></div>													
			</div>
			<iframe src="https://www.facebook.com/plugins/like.php?href=http://www.janetkulyk.com/game.php" scrolling="no" frameborder="0" style="border:none; width:450px; height:80px"></iframe>
		</div>				
		<?php include("inc/footer_new.inc.php"); ?>
		<script src="com.gwtapps.tutorial.Game/com.gwtapps.tutorial.Game.nocache.js"></script>
		<?php include("inc/ga.php"); ?>
  	</body>
</html>