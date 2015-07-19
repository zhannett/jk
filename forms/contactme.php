<?php
	require_once "validation_contactme.php";
	
	$errors = array();
	if (isset($_GET["submitted"])) {
	  # form was submitted
	  foreach ($_GET as $field => $data) {
		$check = validate($field, $data);
		if ($check != "") {
		  $errors[$field] = $check;
		} 
	  };
	  
	  if (count($errors) == 0) echo "<h3 class='thanks'>Thank you for submitting the form!</h3>";
	}
?>

<form action="test_contact.php" method="get">
	<legend>Contact Me</legend>
	<fieldset>
		<p class="textinput">
			<label for="first_name">First Name:</label> 
			<input type="text" name="first_name" size="15" maxlength="20" value="<?php if(isset($_GET['first_name'])) echo $_GET['first_name']; ?>" />
			<span class="error"><?php if (array_key_exists("first_name",$errors)) echo $errors["first_name"]; ?></span>
		</p>
		<p class="textinput">
			<label for="last_name">Last Name:</label> 
			<input type="text" name="last_name" size="15" maxlength="20" value="<?php if(isset($_GET['last_name'])) echo $_GET['last_name']; ?>" />
			<span class="error"><?php if (array_key_exists("last_name",$errors)) echo $errors["last_name"]; ?></span>
		</p>
		<p class="textinput">
			<label for="email">Email Address:</label> 
			<input type="text" name="email" size="20" maxlength="80" value="<?php if(isset($_GET['email'])) echo $_GET['email']; ?>" />
			<span class="error"><?php if (array_key_exists("email",$errors)) echo $errors["email"]; ?></span>
		</p>
		<p>
			<label for="message">Message:</label>
			<textarea name="message" id="message" rows="10" cols="30" ><?php if(isset($_GET['message'])) echo $_GET['message']; ?></textarea>
			<span class="error"><?php if (array_key_exists("message",$errors)) echo $errors["message"]; ?></span>
		</p>
		<p><label for="submit"></label><input type="submit" name="submit" value="Send" /></p>
		<input type="hidden" name="submitted" value="TRUE" />
	</fieldset>
</form>