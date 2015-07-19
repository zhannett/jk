<?php #script 9.2 - edit_user.php
	
	echo '<h1>Edit a User</h1>';
	
	
	// Check for a valid user ID, through GET or POST
	
	if ((isset($_GET['id'])) && (is_numeric($_GET['id']))){
		$id = $_GET['id'];
	} elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) {
		$id = $_POST['id'];
	} else {
		echo '<div class="error"><p>This page has been accessed in error.</p></div>';
		exit();
	}
	
	require_once('../code/mysqli_connect.php');
	
	
	// Check if the form has been submitted
	
	if (isset($_POST['submitted'])) {
	
		$errors = array();
	
		if(empty($_POST['first_name'])) {
			$errors[] = 'You forgot to enter your first name.';
		} else {
			$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
		}
		
		if(empty($_POST['last_name'])) {
			$errors[] = 'You forgot to enter your last name.';
		} else {
			$ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
		}
		
		if(empty($_POST['email'])) {
			$errors[] = 'You forgot to enter your email address.';
		} else {
			$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
		}
		
		if(empty($errors)) {
		
			// Test for unique email address
			$q = "SELECT user_id FROM users WHERE email='$e' AND user_id!=$id";
			$r = @mysqli_query($dbc,$q);			
			
			if(mysqli_num_rows($r) == 0) {
				$q = "UPDATE users SET first_name='$fn', Last_name='$ln', email='$e' WHERE user_id=$id LIMIT 1";
				$r = @mysqli_query($dbc, $q);
				if(mysqli_affected_rows($dbc)==1) {  // the query ran OK
					echo '<p>The user has been edited.</p>';
				} else {
					echo '<div class="error"><p>The user could not be edited due to a system error. We apologize for any inconvenience.</p></div>';
					echo '<p>' . mysqli_error($dbc) . '<br/>Query: ' . $q . '</p>';
				}
			} else { //already registered
				echo '<div class="error"><p>The email address has already been registered.</p></div>';
			} 
			
		} else{ //report the errors
			echo '<div class="error"><p>The following error(s) occured:<br/>';
			foreach($errors as $msg) {
				echo " - $msg<br/>\n";				
			}
			echo '</p><p>Please try again.</p></div>';
		}  // End of if(empty($errors)) IF
				
	} // End of submit conditional
	
	// Always show the form...
	
	//Retrieve the user's information:
	
	$q = "SELECT first_name, last_name, email FROM users WHERE user_id=$id";
	$r = @mysqli_query($dbc,$q);
	
	if (mysqli_num_rows($r) == 1) {
		$row = mysqli_fetch_array($r, MYSQLI_NUM);
		echo '<form action="edit_user.php" method="post">
		<p>First Name: <input type="text" name="first_name" size="15" maxlength="15" value="' . $row[0] . '" /></p>
		<p>Last Name: <input type="text" name="last_name" size="15" maxlength="30" value="' . $row[1] . '" /></p>
		<p>Email Address: <input type="text" name="email" size="20" maxlength="40" value="' . $row[2] . '" /></p>
		<p><input type="submit" name="submit" value="Submit" /></p>
		<input type="hidden" name="submitted" value="TRUE" />
		<input type="hidden" name="id" value="' . $id . '" />
		</form>';
	} else {
		echo '<div class="error"><p>This page has been accessed in error.</p></div>';
	}
	
	mysqli_close($dbc);
	
?>