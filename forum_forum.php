<?php # Script 15.4 - forum.php
		// This page shows the threads in a forum.
		include ('inc/forum_header.php');
		
		// Retrieve all the messages in this forum...
		
		// If the user is logged in and has chosen a time zone, use that to convert the dates and times:
		if (isset($_SESSION['user_tz'])) {
			$first = "CONVERT_TZ(p.posted_on, 'UTC', '{$_SESSION['user_tz']}')";
			$last = "CONVERT_TZ(p.posted_on, 'UTC', '{$_SESSION['user_tz']}')";
		} else {
			$first = 'p.posted_on';
			$last = 'p.posted_on';
		}
		
		// The query for retrieving all the threads in this forum, along with the original user,
		// when the thread was first posted, when it was last replied to, and how many replies it's had:
		$q = "SELECT t.thread_id, t.subject, username, COUNT(post_id) - 1 AS responses, MAX(DATE_FORMAT($last, '%e-%b-%y %l:%i %p')) AS last, MIN(DATE_FORMAT($first, '%e-%b-%y %l:%i %p')) AS first FROM threads AS t INNER JOIN posts AS p USING (thread_id) INNER JOIN users AS u ON t.user_id = u.user_id WHERE t.lang_id = {$_SESSION['lid']} GROUP BY (p.thread_id) ORDER BY last DESC";
		$r = mysqli_query($dbc, $q);
		if (mysqli_num_rows($r) > 0) {
		
			// Create a table:
			echo '<table>
				<caption>Current Threads</caption>
				<thead>
					<tr>
						<th class="subj">' . $words['subject'] . ':</th>
						<th class="postedby">' . $words['posted_by'] . ':</th>
						<th class="postedon">' . $words['posted_on'] . ':</th>
						<th class="replies">' . $words['replies'] . ':</th>
						<th class="latestreply">' . $words['latest_reply'] . ':</th>
					</tr>
				</thead>';
		
			// Fetch each thread:
			while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
			
				echo '<tbody><tr>
						<td class="subj"><a href="forum_read.php?tid=' . $row['thread_id'] . '">' . $row['subject'] . '</a></td>
						<td class="postedby">' . $row['username'] . '</td>
						<td class="postedon">' . $row['first'] . '</td>
						<td  class="replies">' . $row['responses'] . '</td>
						<td class="latestreply">' . $row['last'] . '</td>
					</tr></tbody>';
			
			}
			
			echo '</table>'; // Complete the table.
			
		} else {
			echo '<p class="feedback">There are currently no messages in this forum.</p>';
		}
		
		// Include the HTML footer file:
		include ('inc/forum_footer.php');
?>
