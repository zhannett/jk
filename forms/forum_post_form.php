<?php # Script 15.6 - post_form.php
		// This page shows the form for posting messages.
		// It's included by other pages, never called directly.
		
		// Redirect if this page is called directly:
		if (!isset($words)) {
			header ("Location: http://www.janetkulyk.com/forum_index.php");
			exit();
		}
		
		// Only display this form if the user is logged in:
		if (isset($_SESSION['user_id'])) {
		
			// Display the form:
			echo '<form action="forum_post.php" method="post" accept-charset="utf-8" class="form_forum">';
			
			// If on read.php...
			if (isset($tid) && $tid) {
			
				// Print a caption:
				echo '<h3>' . $words['post_a_reply'] . '</h3>';
				
				// Add the thread ID as a hidden input:
				echo '<p><input name="tid" type="hidden" value="' . $tid . '" /></p>';
				
			} else { // New thread
			
				// Print a caption:
				echo '<h3>' . $words['new_thread'] . '</h3>';
				
				// Create subject input:
				echo '<p><label for="subject">' . $words['subject'] . ': </label><input name="subject" type="text" size="75" maxlength="100" ';
			
				// Check for existing value:
				if (isset($subject)) {
					echo "value=\"$subject\" ";
				}
				
				echo '/></p>';
				
			} // End of $tid IF.
			
			// Create the body textarea:
			echo '<p><label for="body">' . $words['body'] . ': </label><textarea id="body" name="body" rows="10" cols="60">';
			
			if (isset($body)) {
				echo $body;
			}
			
			echo '</textarea></p>';
			
			// Finish the form:
			echo '<p><input id="submit" name="submit" type="submit" value="' . $words['send'] . '" /></p>
				  <p><input name="submitted" type="hidden" value="TRUE" /></p>
			      </form>';
			
		} else {
			echo '<div class="attention"><p>You must be logged in to post messages!</p></div>';
		}

?>
