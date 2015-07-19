<?php # Script 16.8 - login.php

		// Start output buffering:
		ob_start();
		
		require_once ('inc/config.inc.php'); 
		header('Content-Type:text/html; charset=utf-8');
		$page_title='Janet (Zhanna) Kulyk\'s Web Site - Login'; 
		$page_keywords = 'Janet (Zhanna) Kulyk, freelancer, freelance developer, web freelancer, web development, interface, frontend, performanse, web 2.0, Toronto, Ontario, Canada'; 
		$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering'; 
		include ('inc/forum_header.inc.php');
?>		
					
		<div id="yui-main">
			<div class="yui-b">	
				<div class="yui-ge">
					<div class="yui-u first">
						<div id="main_content" class="resizable">
	
							
							<div id="login">						
								<h1>Login</h1>
								<div class="attention"><p>Your browser must allow cookies in order to log in.</p></div>					
									
								<?php
									if (isset($_POST['submitted'])) {
										require_once (MYSQL);
										
										// Validate the email address:
										if (!empty($_POST['email'])) {
											$e = mysqli_real_escape_string ($dbc, $_POST['email']);
										} else {
											$e = FALSE;
											echo '<div class="error"><p>You forgot to enter your email address!</p></div>';
										}
										
										// Validate the password:
										if (!empty($_POST['pass'])) {
											$p = mysqli_real_escape_string ($dbc, $_POST['pass']);
										} else {
											$p = FALSE;
											echo '<div class="error"><p>You forgot to enter your password!</p></div>';
										}						
														
										if ($e && $p) { // If everything's OK.
										
											// Query the database:
											$q = "SELECT user_id, first_name, user_level FROM users WHERE (email='$e' AND pass=SHA1('$p')) AND active IS NULL";		
											$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
											
											if (@mysqli_num_rows($r) == 1) { // A match was made.
									
												// Register the values & redirect:
												$_SESSION = mysqli_fetch_array ($r, MYSQLI_ASSOC); 
												mysqli_free_result($r);
												mysqli_close($dbc);
																
												$url = BASE_URL . 'index.php'; // Define the URL:
												ob_end_clean(); // Delete the buffer.
												header("Location: $url");
												exit(); // Quit the script.
													
											} else { // No match was made.
												echo '<div class="error"><p>Either the email address and password entered do not match those on file or you have not yet activated your account.</p></div>';
											}
											
										} else { // If everything wasn't OK.
											echo '<div class="error"><p>Please try again.</p></div>';
										}
							
										mysqli_close($dbc);
									
									} // End of SUBMIT conditional.
									?>					
									<form action="login.php" method="post">
										<fieldset>
											<p><label for="email">Email Address:</label> <input type="text" id="email" name="email" size="20" maxlength="40" /></p>
											<p><label for="pass">Password:</label> <input type="password" id="pass" name="pass" size="20" maxlength="20" /></p>
											<p><label for="submit">&nbsp;</label><input type="submit" id="submit" name="submit" value="Login" /><a href="forgot_password.php">I forgot my password</a></p>
											<input type="hidden" name="submitted" value="TRUE" />							
										</fieldset>
									</form>
											
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