<?php # Script 16.11 - change_password.php
		// This page allows a logged-in user to change their password.

		// Start output buffering:
		ob_start();
		
		// Initialize a session:
		session_start();
		
		require_once ('inc/config.inc.php'); 
		header('Content-Type:text/html; charset=utf-8');
		$page_title='Janet (Zhanna) Kulyk\'s Web Site - Change Your Password'; 
		$page_keywords = 'Janet (Zhanna) Kulyk, freelancer, freelance developer, web freelancer, web development, interface, frontend, performanse, web 2.0, Toronto, Ontario, Canada'; 
		$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering'; 
		$thickbox="";    
		include ('inc/header.inc.php');	
?>
		<div id="col_left">			
			<?php include("inc/w3c.inc") ?>			
		</div>
			
		<div id="col_middle">									
			<div id="forgot_password">			
				<?php	
					// If no first_name session variable exists, redirect the user:
					if (!isset($_SESSION['first_name'])) {						
						$url = BASE_URL . 'index.php'; // Define the URL.
						ob_end_clean(); // Delete the buffer.
						header("Location: $url");
						exit(); // Quit the script.						
					}
					
					if (isset($_POST['submitted'])) {
						require_once (MYSQL);
								
						// Check for a new password and match against the confirmed password:
						$p = FALSE;
						if (preg_match ('/^(\w){4,20}$/', $_POST['password1']) ) {
							if ($_POST['password1'] == $_POST['password2']) {
								$p = mysqli_real_escape_string ($dbc, $_POST['password1']);
							} else {
								echo '<div class="error"><p>Your password did not match the confirmed password!</p></div>';
							}
						} else {
							echo '<div class="error"><p>Please enter a valid password!</p></div>';
						}
						
						if ($p) { // If everything's OK.
					
							// Make the query.
							$q = "UPDATE users SET pass=SHA1('$p') WHERE user_id={$_SESSION['user_id']} LIMIT 1";	
							$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
							if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.
							
								// Send an email, if desired.
								echo '<div class="feedback_yes"><p>Your password has been changed.</p></div>';
								mysqli_close($dbc); // Close the database connection.
								?>
								</div> 								
									</div>
										
									<div id="col_right">										
										<div class="resizable quotation rounded {10px}">
											<blockquote>
												<div class="quot">&quot;The greatest glory is not in never failing, but in rising up every time we fall.&quot;</div>
												<div class="author">&mdash; Confucius, 551 BC - 479 BC</div>
											</blockquote>
										</div>
									</div>
								<?php include ('inc/footer.inc.php'); ?>
													<script type="text/javascript" src="js/optimized.js"></script>	
													<script type="text/javascript">
														//<![CDATA[
														$('ul.nav>li') .hover(function(){$(this) .addClass('active');}, function(){$(this) .removeClass('active');});
														//]]>
													</script>
													<script type="text/javascript" src="js/thickbox_min.js"></script>
													<?php include("inc/ga.php"); ?>
											</body>		
									</html>
								<?php
								exit();								
							} else { // If it did not run OK.							
								echo '<div class="error"><p>Your password was not changed. Make sure your new password is different than the current password. Contact the system administrator if you think an error occurred.</p></div>'; 
							}					
						} else { // Failed the validation test.
							echo '<div class="error"><p>Please try again.</p></div>';		
						}						
						mysqli_close($dbc); // Close the database connection.					
					} // End of the main Submit conditional.					
				?>

				<h1>Change Your Password</h1>
				<form id="change_password" action="change_password.php" method="post">
					<fieldset>
						<p><label for="password1">New Password:</label> <input type="password" id="password1" name="password1" size="20" maxlength="20" /> <span class="note">Use only letters, numbers, and the underscore. Must be between 4 and 20 characters long.</span></p>
						<p><label for="password2">Confirm New Password:</label> <input type="password" id="password2" name="password2" size="20" maxlength="20" /></p>
						<p><label for="submit">&nbsp;</label><input type="submit" name="submit" value="Change My Password" /></p>
						<input type="hidden" name="submitted" value="TRUE" />
					</fieldset>					
				</form>
				
				</div> 								
			</div>
				
			<div id="col_right">										
				<div class="resizable quotation rounded {10px}">
					<blockquote>
						<div class="quot">&quot;The greatest glory is not in never failing, but in rising up every time we fall.&quot;</div>
						<div class="author">&mdash; Confucius, 551 BC - 479 BC</div>
					</blockquote>
				</div>
			</div>
			<?php include ('inc/footer.inc.php'); ?>			
			<script type="text/javascript">
				//<![CDATA[
					$('ul.nav>li') .hover(function(){$(this) .addClass('active');}, function(){$(this) .removeClass('active');});
				//]]>
			</script>
			<script type="text/javascript" src="js/thickbox_min.js"></script>
			<?php include("inc/ga.php"); ?>
		</body>		
</html>