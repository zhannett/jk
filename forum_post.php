<?php # Script 15.7 - post.php
		// This page handles the message post.
		// It also displays the form if creating a new thread.
		$page_title='Janet (Zhanna) Kulyk - FORUM - Post a Message'; 
		$page_keywords = 'Janet (Zhanna) Kulyk, freelancer, freelance developer, consultant, web freelancer, front end engineer, interface developer, web 2.0, forum, Toronto, Ontario, Canada'; 
		$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering. Forum pages.';  
		include ('inc/forum_header.inc.php');
?>		
				<div id="yui-main">
					<div class="yui-b">	
						<div class="yui-ge">
							<div class="yui-u first">
								<div id="main_content" class="resizable">
									<?php
					
										if (isset($_POST['submitted'])) { // Handle the form.
									
										// Language ID ($lid) is in the session.
										// Validate thread ID ($tid), which may not be present:
										$tid = FALSE;
										if (isset($_POST['tid']) && is_numeric($_POST['tid']) ) {
											$tid = (int) $_POST['tid'];
											if ($tid <= 0) { 
												$tid = FALSE;
											}
										}
									
										// If there's no thread ID, a subject must be provided:
										if (!$tid && empty($_POST['subject'])) {
											$subject = FALSE;
											echo '<p>Please enter a subject for this post.</p>';
										} elseif (!$tid && !empty($_POST['subject'])) {
											$subject = htmlspecialchars(strip_tags($_POST['subject']));
										} else { // Thread ID, no need for subject.
											$subject = TRUE;
										}
										
										// Validate the body:
										if (!empty($_POST['body'])) {
											$body = strip_tags($_POST['body']);
										} else {
											$body = FALSE;
											echo '<div class="error"><p>Please enter a body for this post.</p></div>';
										}
										
										if ($subject && $body) { // OK!
										
											// Add the message to the database...
											
											if (!$tid) { // Create a new thread.
												$q = "INSERT INTO threads (lang_id, user_id, subject) VALUES ({$_SESSION['lid']}, {$_SESSION['user_id']}, '" . mysqli_real_escape_string($dbc, $subject) . "')";
												$r = mysqli_query($dbc, $q);
												if (mysqli_affected_rows($dbc) == 1) {
													$tid = mysqli_insert_id($dbc);
												} else {
													echo '<div class="error"><p>Your post could not be handled due to a system error.</p></div>';
												}		
											} 
											
											if ($tid) { // Add this to the replies table:
												$q = "INSERT INTO posts (thread_id, user_id, message, posted_on) VALUES ($tid, {$_SESSION['user_id']}, '" . mysqli_real_escape_string($dbc, $body) . "', UTC_TIMESTAMP())";
												$r = mysqli_query($dbc, $q);
												if (mysqli_affected_rows($dbc) == 1) {
													echo '<div class="feedback_yes"><p>Your post has been entered.</p></div>';
												} else {
													echo '<div class="error"><p>Your post could not be handled due to a system error.</p></div>';
												}		
											}
										
										} else { // Include the form:
											include ('forms/forum_post_form.php');
										}
									
									} else { // Display the form:			
										include ('forms/forum_post_form.php');		
									}		
								?>
							</div>	
						</div>		
					
						<div class="yui-u">	
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("inc/footer_new.inc.php"); ?>	
		<script type="text/javascript" src="js/optim.js" charset="utf-8"></script>					
		<script type="text/javascript">
			//<![CDATA[
				$('#sf-menu_forum>a') .css('background-color','#005A9C') .css('color','#FFF') .css('cursor','text');	
			//]]>	
		</script>			
		<?php include("inc/ga.php"); ?>
	</body>
</html>

