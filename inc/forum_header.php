<?php # Script 15.1 - header.html
	/* This script...
	 * - starts the HTML template.
	 * - indicates the encoding using header().
	 * - starts the session.
	 * - gets the language-specific words from the database.
	 * - lists the available languages.
	 */
	
	
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();
	$page_title='Janet (Zhanna) Kulyk - Forum'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, freelancer, freelance developer, web freelancer, web development, interface, frontend, performanse, web 2.0, Toronto, Ontario, Canada'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering';     
	
	include("inc/header_new.inc.php");
			
			// For testing purposes:
					//$_SESSION['user_id'] = 1;
					//$_SESSION['user_tz'] = 'America/New_York';
					//$_SESSION = array();
			
			// Need the database connection:
			require_once('../code/forum_connect.php');
			
			// The language ID is stored in the session. Check for a new language ID...
			if (isset($_GET['lid']) && is_numeric($_GET['lid'])) {
				$_SESSION['lid'] = (int) $_GET['lid'];
			} elseif (!isset($_SESSION['lid'])) {
				$_SESSION['lid'] = 1; // Default.
			}
			
			// Get the words for this language.
			$words = FALSE; // Flag variable.
			if ($_SESSION['lid'] > 0) {
				$q = "SELECT * FROM words WHERE lang_id = {$_SESSION['lid']}";
				$r = mysqli_query($dbc, $q);
				if (mysqli_num_rows($r) == 1) {
					$words = mysqli_fetch_array($r, MYSQLI_ASSOC);
				}
			}
			
			// If we still don't have the words, get the default language:
			if (!$words) {
				$_SESSION['lid'] = 1; // Default.
				$q = "SELECT * FROM words WHERE lang_id = {$_SESSION['lid']}";
				$r = mysqli_query($dbc, $q);
				$words = mysqli_fetch_array($r, MYSQLI_ASSOC);
			}
			
			mysqli_free_result($r);
	?>
	
			<div class="yui-b">
				<?php // Display links:
			
					// Default links:
					echo '<ul>';
					echo '<li><a href="forum.php" class="navlink">' . $words['forum_home'] . '</a></li>';
					
					// Display links based upon login status:
					if (isset($_SESSION['user_id'])) {				
						// If this is the forum page, add a link for posting new threads:
						if (stripos($_SERVER['PHP_SELF'], 'forum.php')) {
							echo '<li><a href="forum_post.php" class="navlink">' . $words['new_thread'] . '</a></li>';
						}
					}					
					echo '</ul>';
					
					// For choosing a forum/language:
					echo   '<form action="forum.php" method="get" id="lang">
								<p><select id="lid" name="lid">
									<option value="0">' . $words['language'] . '</option>';
							
									// Retrieve all the languages...
									$q = "SELECT lang_id, lang FROM languages ORDER BY lang_eng ASC";
									$r = mysqli_query($dbc, $q);
									if (mysqli_num_rows($r) > 0) {
										while ($menu_row = mysqli_fetch_array($r, MYSQLI_NUM)) {
											echo "<option value=\"$menu_row[0]\">$menu_row[1]</option>\n";
										}
									}
									mysqli_free_result($r);
									unset($menu_row);
								
									echo '</select></p>
									<p><input name="submit" type="submit" value="' . $words['submit'] . '" /></p>
							</form>';
					echo '<div class="h50"></div>';	
					include("inc/w3c.inc");
				?>		
			</div>
			
								
			<div id="yui-main">
				<div class="yui-b">	
					<div class="yui-ge">
						<div class="yui-u first">
							<div id="main_content" class="resizable">	
