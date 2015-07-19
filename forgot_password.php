<?php # Script 16.10 - forgot_password.php
// This page allows a user to reset their password, if forgotten.

		
		// Start output buffering:
		ob_start();
		
		// Initialize a session:
		session_start();
		
		require_once ('inc/config.inc.php'); 
		header('Content-Type:text/html; charset=utf-8');
		$page_title='Janet (Zhanna) Kulyk\'s Web Site - Forgot Your Password'; 
		$page_keywords = 'Janet (Zhanna) Kulyk, freelancer, freelance developer, web freelancer, web development, interface, frontend, performanse, web 2.0, Toronto, Ontario, Canada'; 
		$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering'; 
		include ('inc/header_new.inc.php');	
?>
		
			<div class="yui-b">
				<?php include("inc/w3c.inc") ?>								
			</div>
								
			<div id="yui-main">
				<div class="yui-b">	
					<div class="yui-ge">
						<div class="yui-u first">
							<div id="main_content" class="resizable">						
								<div id="forgot_password">			
									<?php			
										if (isset($_POST['submitted'])) {
											require_once (MYSQL);
										
											// Assume nothing:
											$uid = FALSE;
								
											// Validate the email address...
											if (!empty($_POST['email'])) {
											
												// Check for the existence of that email address...
												$q = 'SELECT user_id FROM users WHERE email="'.  mysqli_real_escape_string ($dbc, $_POST['email']) . '"';
												$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
												
												if (mysqli_num_rows($r) == 1) { // Retrieve the user ID:
													list($uid) = mysqli_fetch_array ($r, MYSQLI_NUM); 
												} else { // No database match made.
													echo '<div class="error"><p>The submitted email address does not match those on file!</p></div>';
												}
												
											} else { // No email!
												echo '<div class="error"><p>You forgot to enter your email address!</p></div>';
											} // End of empty($_POST['email']) IF.
											
											if ($uid) { // If everything's OK.
										
												// Create a new, random password:
												$p = substr ( md5(uniqid(rand(), true)), 3, 10);
										
												// Update the database:
												$q = "UPDATE users SET pass=SHA1('$p') WHERE user_id=$uid LIMIT 1";
												$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
												
												if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.						
														// Send an email:
														$body = "Your password to log into www.janetkulyk.com web site has been temporarily changed to '$p'.\nPlease log in using this password and this email address.\nThen you may change your password to something more familiar.";
														mail ($_POST['email'], 'Your temporary password.', $body, 'From: admin@janetkulyk.com');
														
														// Print a message and wrap up:
														echo '<div class="feedback_yes"><p>Your password has been changed. You will receive the new, temporary password at the email address with which you registered. Once you have logged in with this password, you may change it by clicking on the "Change Password" link.</p></div>';
														mysqli_close($dbc);
														?>
															</div>								
														</div>
															
															</div>
														<div class="yui-u">		
															<div id="quot1" class="resizable">
																<blockquote>
																	<div class="quot">&quot;The greatest glory is not in never failing, but in rising up every time we fall.&quot;</div>
																	<div class="author">&mdash; Confucius, 551 BC - 479 BC</div>
																</blockquote>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php
											include ('inc/footer_new.inc.php');
										?>
										<script type="text/javascript" src="js/optim.js" charset="utf-8"></script>	
										<script type="text/javascript">
											//<![CDATA[
												$('ul.nav>li') .hover(function(){$(this) .addClass('active');}, function(){$(this) .removeClass('active');});
											//]]>
										</script>
										<?php include("inc/ga.php"); ?>
									</body>
								</html>	
									
									
									<?php					
															exit(); // Stop the script.
													
												} else { // If it did not run OK.
														echo '<div class="error"><p>Your password could not be changed due to a system error. We apologize for any inconvenience.</p></div>'; 
												}				
											} else { // Failed the validation test.
												echo '<div class="error"><p>Please try again.</p></div>';
											}				
											mysqli_close($dbc);				
										} // End of the main Submit conditional.				
									?>
										<h1>Reset Your Password</h1>
										<p>Enter your email address below and your password will be reset.</p> 
										<form action="forgot_password.php" method="post">
											<fieldset>
												<p><label for="email">Email Address:</label> <input type="text" id="email" name="email" size="20" maxlength="40" class="textinput" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" /></p>
												<p><label for="submit">&nbsp;</label><input type="submit" id="submit" name="submit" value="Reset My Password" /></p>
												<p><input type="hidden" name="submitted" value="TRUE" /></p>
											</fieldset>
										</form>
												
									</div> 								
								</div>
							</div>
								
							<div class="yui-u">		
								<div id="quot1" class="resizable">
									<blockquote>
										<div class="quot">&quot;The greatest glory is not in never failing, but in rising up every time we fall.&quot;</div>
										<div class="author">&mdash; Confucius, 551 BC - 479 BC</div>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
				include ('inc/footer_new.inc.php');
			?>
			<script type="text/javascript" src="js/optim.js" charset="utf-8"></script>	
			<script type="text/javascript">
				//<![CDATA[
					$('ul.nav>li') .hover(function(){$(this) .addClass('active');}, function(){$(this) .removeClass('active');});
				//]]>
			</script>
			<?php include("inc/ga.php"); ?>
		</body>		
</html>