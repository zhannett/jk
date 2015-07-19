<?php # Script 15.5 - read.php
		// This page shows the messages in a thread.
		if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
		$page_title='Janet (Zhanna) Kulyk - FORUM - Read a Thread'; 
		$page_keywords = 'Janet (Zhanna) Kulyk, freelancer, freelance developer, consultant, web freelancer, front end engineer, interface developer, web 2.0, forum, Toronto, Ontario, Canada'; 
		$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering. Forum pages.';     
		$thickbox="";
		include ('inc/forum_header.php');
		
		// Check for a thread ID...
		$tid = FALSE;
		if (isset($_GET['tid']) && is_numeric($_GET['tid'])) {
		
			$tid = (int) $_GET['tid'];
		
			if ($tid > 0) { // Check against the database...
			
				// Convert the date if the user is logged in:
				if (isset($_SESSION['user_tz'])) {
					$posted = "CONVERT_TZ(p.posted_on, 'UTC', '{$_SESSION['user_tz']}')";
				} else {
					$posted = 'p.posted_on';
				}
		
				// Run the query:
				$q = "SELECT t.subject, p.message, username, DATE_FORMAT($posted, '%e-%b-%y %l:%i %p') AS posted FROM threads AS t LEFT JOIN posts AS p USING (thread_id) INNER JOIN users AS u ON p.user_id = u.user_id WHERE t.thread_id = $tid ORDER BY p.posted_on ASC";
				$r = mysqli_query($dbc, $q);
				if (!(mysqli_num_rows($r) > 0)) {
					$tid = FALSE; // Invalid thread ID!
				}
				
			} // End of ($tid > 0) IF.
			
		} // End of isset($_GET['tid']) IF.
		
		if ($tid) { // Get the messages in this thread...
			
			$printed = FALSE; // Flag variable.
			
			// Fetch each:
			while ($messages = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
			
				// Only need to print the subject once!
				if (!$printed) {
					echo "<p class='thread'>{$messages['subject']}</p>";
					$printed = TRUE;
				}
				
				// Print the message:
				echo "<p><span class='message_info'>{$messages['username']} ({$messages['posted']})</span><br/><span class='message_body'>{$messages['message']}</span></p>";
			
			} // End of WHILE loop.
				
			// Show the form to post a message:
			include ('forms/forum_post_form.php');
			
		} else { // Invalid thread ID!
			echo '<p>This page has been accessed in error.</p>';
		}
?>

			</div>
		</div>
		<?php include("inc/footer.inc.php"); ?>
		<script type="text/javascript">
			//<![CDATA[
				$('#sf-menu_forum>a') .css('background-color','#005A9C') .css('color','#FFF') .css('cursor','text');	
			//]]>	
		</script>			
		<?php include("inc/ga.php"); ?>
	</body>
</html>