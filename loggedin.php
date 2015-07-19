<?php # Script 11.4 - loggedin.php

		// The user is redirected here from login.php.
		
		session_start();
		
		// If no cookie is present, redirect the user:
		if (!isset($_SESSION['agent']) OR ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']))) {
			require_once ('inc/login_functions.inc.php');
			$url = absolute_url();
			header("Location: $url");
			exit(); // Quit the script.			
		}
		
		// Set the page title and include the HTML header:
		$page_title = 'Logged In!';
		include ('inc/forum_header.inc.php');
		
		// Print a customized message:
		echo "<h1>Logged In!</h1>";
		echo "<p>You are now logged in, {$_SESSION['first_name']}!</p>";
		//echo "<p>You are now logged in, {$_COOKIE['first_name']}!</p>";		
		echo "<p><a href=\"logout.php\">Logout</a></p>";
		
		<?php include("inc/footer_new.inc.php"); ?>	
?>
