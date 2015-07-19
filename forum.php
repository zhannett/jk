<?php # Script 15.4 - forum.php
		// This page shows the threads in a forum.	
		
		$page_title='Janet (Zhanna) Kulyk - FORUM'; 
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
											echo '<table id="forum_main">
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
											echo '<div class="attention"><p>There are currently no messages in this forum.</p></div>';
										}		
								?>
	
							</div>	
						</div>		
				
						<div class="yui-u">		
							<ul>
								<li><a href="http://www.amazon.ca/PHP-MySQL-Dynamic-Web-Sites/dp/032152599X/ref=sr_1_3?ie=UTF8&amp;s=books&amp;qid=1239500987&amp;sr=8-3"><img src="img/img_php6_mysql5.gif" width="96" height="122" alt="PHP 6 and MySQL 5 for Dynamic Web Sites: Visual QuickPro Guide " title="PHP 6 and MySQL 5 for Dynamic Web Sites: Visual QuickPro Guide " /></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("inc/footer_new.inc.php"); ?>
		<script type="text/javascript" src="js/optim.js"></script>				
		<script type="text/javascript">
			//<![CDATA[
				$('#sf-menu_forum>a') .css('background-color','#005A9C') .css('color','#FFF') .css('cursor','text');	
			//]]>	
		</script>			
		<?php include("inc/ga.php"); ?>
	</body>
</html>

