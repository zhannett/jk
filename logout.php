<?php # Script 16.9 - logout.php

		// Start output buffering:
		ob_start();
				
		require_once ('inc/config.inc.php'); 
		header('Content-Type:text/html; charset=utf-8');
		$page_title='Janet (Zhanna) Kulyk\'s Web Site - Logout'; 
		$page_keywords = 'Janet (Zhanna) Kulyk, freelancer, freelance developer, web freelancer, web development, interface, frontend, performanse, web 2.0, Toronto, Ontario, Canada'; 
		$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering'; 
		include ('inc/forum_header.inc.php');
?>		
					
		<div id="yui-main">
			<div class="yui-b">	
				<div class="yui-ge">
					<div class="yui-u first">
						<div id="main_content" class="resizable">
								
						<div id="logout">
							<?php
								// If no first_name session variable exists, redirect the user:
								if (!isset($_SESSION['first_name'])) {					
									$url = BASE_URL . 'index.php'; // Define the URL.
									ob_end_clean(); // Delete the buffer.
									header("Location: $url");
									exit(); // Quit the script.						
								} else { // Log out the user.					
									$_SESSION = array(); // Destroy the variables.
									session_destroy(); // Destroy the session itself.
									setcookie (session_name(), '', time()-300); // Destroy the cookie.		
								}
								
								// Print a customized message:
								echo '<div class="feedback_yes"><p>You are now logged out.</p></div>';
							?>
								</div> 								
							</div>
						</div>
						
						<div class="yui-u">		
							<div id="quot1" class="resizable">	
								<blockquote>
									<div class="quot">&quot;The greatest glory is not in never failing, but in rising up every time we fall.&quot;</div>
									<div class="author">&mdash; Confucius, 551 BC – 479 BC</div>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("inc/footer_new.inc.php"); ?>	
		<script type="text/javascript" src="js/optim.js" charset="utf-8"></script>	
	</body>
</html>