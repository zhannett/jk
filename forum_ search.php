<?php # Script 15.8 - search.php
		// This page displays and handles a search form.
		
		$page_title='Janet (Zhanna) Kulyk - FORUM - Search'; 
		$page_keywords = 'Janet (Zhanna) Kulyk, freelancer, freelance developer, consultant, web freelancer, front end engineer, interface developer, web 2.0, forum, Toronto, Ontario, Canada'; 
		$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering. Forum pages.';     
		$thickbox="";
		include ('includes/header.inc.php');
		
		// Show the search form:
		echo '<form action="search.php" method="get" accept-charset="utf-8">
		<p><em>' . $words['search'] . '</em>: <input name="terms" type="text" size="30" maxlength="60" ';
			
		// Check for existing value:
		if (isset($_GET['terms'])) {
			echo 'value="' . htmlspecialchars($_GET['terms']) . '" ';
		}
		
		// Complete the form:
		echo '/><input name="submit" type="submit" value="' . $words['submit'] . '" /></p></form>';
		
		if (isset($_GET['terms'])) { // Handle the form.
		
			// Clean the terms:
			$terms = mysqli_real_escape_string($dbc, htmlentities(strip_tags($_GET['terms'])));
		
			// Run the query...
			$q = "SELECT * FROM languages WHERE lang_id = 100";
			$r = mysqli_query($dbc, $q);
			if (mysqli_num_rows($r) > 0) {
				echo '<h2>Search Results</h2>';
			} else {
				echo '<p>No results found.</p>';
			}
		
		}		
?>

			</div>
		</div>
		<?php include("inc/footer.inc.php"); ?>
		<?php include("inc/ga.php"); ?>
	</body>
</html>



