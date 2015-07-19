<?php
	
	$page_title = 'View the Current Users';
	echo '<h1>Registered Users</h1>';
	
	require_once('../code/mysqli_connect.php');
	
	$display = 3;
	
	// Determine how many pages there are...
	
	if (isset($_GET['p']) && is_numeric($_GET['p'])) {
		$pages = $_GET['p'];
	} else {  // need to determine
		$q = "SELECT COUNT(user_id) FROM users";
		$r = @mysqli_query($dbc,$q);
		$row = @mysqli_fetch_array($r, MYSQLI_NUM);
		$records = $row[0];
		
		if($records > $display) {
			$pages = ceil($records/$display);
		} else {
			$pages = 1;
		}	
	}  // End of np IF.
	
	// Determine where in the database to start returniing results...	
	if(isset($_GET['s']) && is_numeric($_GET['s'])) {
		$start = $_GET['s'];
	} else {
		$start = 0;
	}
	
	// Determine the sort...
	
	// Default by registration date
	$sort = (isset($_GET['sort']))? $_GET['sort'] : 'rd';
	
	// Determine the sorting order:
	switch ($sort) {
		case 'ln';
			$order_by = 'last_name ASC';
			break;
		case 'fn':
			$order_by = 'first_name ASC';
			break;
		case 'rd':
			$order_by = 'registration_date ASC';
			break;
		default:
			$order_by = 'registration_date ASC';
			$sort = 'rd';
			break;
	}
		
	$q = "SELECT last_name, first_name, DATE_FORMAT(registration_date, '%M %d, %Y') AS dr, user_id
	      FROM users 
		  ORDER BY $order_by 
		  LIMIT $start, $display";
	$r = @mysqli_query($dbc, $q);	
	$num = mysqli_num_rows($r);
	
	if($num>0) {
		echo "<p>The are currently $num registered users.</p>\n";
		echo'<table>
				<tr>
					<th>Edit</th>
					<th>Delete</th>
					<th><a href="view_users.php?sort=ln">Last Name</a></th>
					<th><a href="view_users.php?sort=fn">First Name</a></th>
					<th><a href="view_users.php?sort=rd">Date Registered<a/></th>
				</tr>';
				$bg = "#EEEEEE";
				while ($row = mysqli_fetch_array($r,MYSQLI_ASSOC)){
					$bg = ($bg=='#EEEEEE'?'#FFFFFF':'#EEEEEE');
					echo '<tr bgcolor="' . $bg . '">
						<td><a href="edit_user.php?id=' . $row['user_id'] . '">Edit</a></td>
						<td><a href="delete_user.php?id=' . $row['user_id'] . '">Delete</a></td>
						<td>' .$row['last_name'] . '</td>
						<td>' . $row['first_name'] . '</td>
						<td>' . $row['dr'] . '</td>
					</tr>';
				}
		echo '</table>';
		mysqli_free_result($r);
	} else {
		echo '<div class="error"><p>There are currently no registered users.</p></div>';
		echo '<p>' . mysqli_error($dbc) . '<br/><br/>Query: ' . $q . '</p>';
	}
	
	mysqli_close($dbc);
	
	
	// Make the links to other pages, if necessary 
	
	if($pages>1) {
		echo '<br/><p>';
		$current_page = ($start/$display) +1;
		
		if($current_page != 1) {
			echo '<a href="view_users.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a>&nbsp;&nbsp; ';
		}
		
		for($i=1; $i<=$pages; $i++) {
			if($i!=$current_page) {
				echo '<a href="view_users.php?s=' . (($display*($i-1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
			} else {
				echo $i . ' ';
			}
		}
		
		if($current_page != $pages) {
			echo '&nbsp;&nbsp; <a href="view_users.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
		}
		
		echo '</p>';
	}

?>