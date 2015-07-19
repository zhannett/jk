<?php //register.php
		
		// Start output buffering:
		ob_start();
		
		// Initialize a session:
		session_start();
		
		require_once ('inc/config.inc.php');		
		header('Content-Type:text/html; charset=utf-8');
		$today = date("l, F j, Y");  
		$page_title='Janet (Zhanna) Kulyk\'s Web Site - Register'; 
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
									<div id="register">			
										<h1>Register</h1>
										
										
										<?php
											
											if (isset($_POST['submitted'])) { // Handle the form.
										
											require_once (MYSQL);
											
											// Trim all the incoming data:
											$trimmed = array_map('trim', $_POST);
											
											// Assume invalid values:
											$fn = $ln = $e = $p = FALSE;
											
											// Check for a first name:
											if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['first_name'])) {
												$fn = mysqli_real_escape_string ($dbc, $trimmed['first_name']);
											} else {
												echo '<div class="error"><p>Please enter your first name!</p></div>';
											}
											
											// Check for a last name:
											if (preg_match ('/^[A-Z \'.-]{2,40}$/i', $trimmed['last_name'])) {
												$ln = mysqli_real_escape_string ($dbc, $trimmed['last_name']);
											} else {
												echo '<div class="error"><p>Please enter your last name!</p></div>';
											}
											
											// Check for a username:
											if (preg_match ('/^[A-Z0-9 \'.-]{2,40}$/i', $trimmed['last_name'])) {
												$un = mysqli_real_escape_string ($dbc, $trimmed['last_name']);
											} else {
												echo '<div class="error"><p>Please enter your last name!</p></div>';
											}
											
											// Check for an email address:
											if (preg_match ('/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/', $trimmed['email'])) {
												$e = mysqli_real_escape_string ($dbc, $trimmed['email']);
											} else {
												echo '<div class="error"><p>Please enter a valid email address!</p></div>';
											}
										
											// Check for a password and match against the confirmed password:
											if (preg_match ('/^\w{4,20}$/', $trimmed['password1']) ) {
												if ($trimmed['password1'] == $trimmed['password2']) {
													$p = mysqli_real_escape_string ($dbc, $trimmed['password1']);
												} else {
													echo '<div class="error"><p>Your password did not match the confirmed password!</p></div>';
												}
											} else {
												echo '<div class="error"><p>Please enter a valid password!</p></div>';
											}
											
											if ($fn && $ln && $e && $p) { // If everything's OK...
										
												// Make sure the email address is available:
												$q = "SELECT user_id FROM users WHERE email='$e'";
												$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
												
												if (mysqli_num_rows($r) == 0) { // Available.
												
													// Create the activation code:
													$a = md5(uniqid(rand(), true));
												
													// Add the user to the database:
													$q = "INSERT INTO users (email, pass, first_name, last_name, username, active, registration_date) VALUES ('$e', SHA1('$p'), '$fn', '$ln', '$un', '$a', NOW() )";
													$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
										
													if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.
													
														// Send the email:
														$body = "Thank you for registering at www.janetkulyk.com. To activate your account, please click on this link:\n\n";
														$body .= BASE_URL . 'activate.php?x=' . urlencode($e) . "&y=$a";
														mail($trimmed['email'], 'Registration Confirmation', $body, 'From: admin@janetkulyk.com');
														
														// Finish the page:
														echo '<div class="feedback_yes"><p>Thank you for registering!</p><p>A confirmation email has been sent to your address.</p><p>Please click on the link in that email in order to activate your account.</p></div>';
														// Include the HTML footer.
														?>	
														
														</div>							
													</div> 								
												</div>
													
												<div class="yui-u">		
													<div id="quot1" class="resizable">
														<blockquote>
															<div class="quot">&quot;The greatest glory is not in never failing, but in rising up every time we fall.&quot;</div>
															<div class="author">- Confucius,<br/>551 BC - 479 BC</div>
														</blockquote>
													</div>
													
													<h5>Recommended:</h5>
													<ul>
														<li><a href="http://easyseoguide.com/"><img src="img/img_easy_seo_guide.gif" width="104" height="162" alt="Easy SEO Guide" /></a></li>
													</ul>			
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
									$('ul.nav>li') .hover(function(){$(this) .addClass('active');}, function(){$(this) .removeClass('active');});
								</script>			
								<?php include("inc/ga.php"); ?>
							</body>
						</html>
						
								
						<?php // Flush the buffered output.
							ob_end_flush();
						
									exit(); // Stop the page.
											
								} else { // If it did not run OK.
									echo '<div class="error"><p>You could not be registered due to a system error. We apologize for any inconvenience.</p></div>';
								}
										
								} else { // The email address is not available.
									echo '<div class="error"><p>That email address has already been registered. If you have forgotten your password, use the link at right to have your password sent to you.</p></div>';
								}
									
								} else { // If one of the data tests failed.
									echo '<div class="error"><p>Please re-enter your passwords and try again.</p></div>';
								}
							
								mysqli_close($dbc);
							
							} // End of the main Submit conditional.
						?>
						
				
										<form action="register.php" method="post">
											<fieldset>
												<p>
													<label for="first_name">First Name:</label>
													<input type="text" id="first_name" name="first_name" size="20" maxlength="20" value="<?php if (isset($trimmed['first_name'])) echo $trimmed['first_name']; ?>" />
												</p>
												<p>
													<label for="last_name">Last Name:</label> 
													<input type="text" id="last_name" name="last_name" size="20" maxlength="40" value="<?php if (isset($trimmed['last_name'])) echo $trimmed['last_name']; ?>" />
												</p>
												<p>
													<label for="username">Username:</label> 
													<input type="text" id="username" name="username" size="20" maxlength="40" value="<?php if (isset($trimmed['username'])) echo $trimmed['username']; ?>" />
												</p>
												<p>
													<label for="email">Email Address:</label> 
													<input type="text" id="email" name="email" size="30" maxlength="80" value="<?php if (isset($trimmed['email'])) echo $trimmed['email']; ?>" /> 
												</p>
												<p>
													<label for="password1">Password:</label> 
													<input type="password" id="password1" name="password1" size="20" maxlength="20" /> 
													<span class="note">Use only letters, numbers, and the underscore. Must be between 4 and 20 characters long.</span>
												</p>
												<p>
													<label for="password2">Confirm Password:</label> 
													<input type="password" id="password2" name="password2" size="20" maxlength="20" />
												</p>
												<div class="h20"></div>
												<p><label for="submit">&nbsp;</label><input type="submit" name="submit" value="Register" /></p>
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
									<div class="author">- Confucius,<br/>551 BC - 479 BC</div>
								</blockquote>
							</div>
							
							<h5>Recommended:</h5>
							<ul>
								<li><a href="http://easyseoguide.com/"><img src="img/img_easy_seo_guide.gif" width="104" height="162" alt="Easy SEO Guide" /></a></li>
							</ul>			
						</div>
					</div>
				</div>
			</div>
		
		<?php
			include ('inc/footer_new.inc.php');
		?>
		<script type="text/javascript" src="js/optim.js" charset="utf-8"></script>	
		<script type="text/javascript">
			$('ul.nav>li') .hover(function(){$(this) .addClass('active');}, function(){$(this) .removeClass('active');});
		</script>			
		<?php include("inc/ga.php"); ?>
	</body>
</html>

<?php // Flush the buffered output.
	ob_end_flush();
?>



