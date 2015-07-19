<?php
	// Configure our email variables
	$email_to = 'janetkulyk@yahoo.com';
	$email_subject = 'Form submission';

	// Configure our required fields
	$required_fields = array('fullname','email','comment');

	// What are our error messages?
	$error_messages = array(
		'fullname' => 'Please enter your Name to continue.',
		'email' => 'Please enter a valid Email Address to continue.',
		'comment' => 'Please enter your Comment to continue.'
	);

	// Set our default form status
	$form_complete = FALSE;

	// Prepare our validation array
	$validation = array();

	// Let's check that the form was submitted
	if(!empty($_POST)) {
		// Sanitise our POST array
		foreach($_POST as $key => $value) $_POST[$key] = remove_email_injection(trim($value));
		
		// Loop through our requirements and make sure they are acceptable
		foreach($required_fields as $field) {		
			// Firstly, has the field been submitted?
			if(!array_key_exists($field, $_POST)) array_push($validation, $field);
			
			// Secondly, is there actually any data in the field?
			if($_POST[$field] == '') array_push($validation, $field);
			
			// Lastly, let's validate the submitted email address
			if($field == 'email') if(!validate_email_address($_POST[$field])) array_push($validation, $field);
		}
		
		// Now we want to check the outcome of our basic validation
		if(count($validation) == 0) {
			// Prepare our content string
			$email_content = 'New Website Comment: ' . "\n\n";
			
			// Let's build our simple email content
			foreach($_POST as $key => $value) {
				if($key != 'submit') $email_content .= $key . ': ' . $value . "\n";
			}
			
			// The validation passed, so send the email
			mail($email_to, $email_subject, $email_content);
			
			// Update our form switch
			$form_complete = TRUE;
		}
	}

	function validate_email_address($email = FALSE) {
		return (preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $email))? TRUE : FALSE;
	}

	function remove_email_injection($field = FALSE) {
	   return (str_ireplace(array("\r", "\n", "%0a", "%0d", "Content-Type:", "bcc:","to:","cc:"), '', $field));
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Back to Basics: Form to Email</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		
		<script type="text/javascript" src="mootools-1.2.4-core-yc.js"></script>
		<script type="text/javascript" src="validation.js"></script>
		<script type="text/javascript">
			var nameError = '<?php echo $error_messages['fullname']; ?>';
			var emailError = '<?php echo $error_messages['email']; ?>';
			var commentError = '<?php echo $error_messages['comment']; ?>';
		</script>
	</head>
	<body>
		<?php if($form_complete === FALSE): ?>
			<form action="index.php" method="post" id="comments_form">
				<fieldset>
					<div>
						<label for="fullname">Full Name: <strong>*</strong></label>
						<input type="text" name="fullname" value="<?php echo isset($_POST['fullname'])? $_POST['fullname'] : ''; ?>" id="fullname" />
						<?php if(in_array('fullname', $validation)): ?><span class="error"><?php echo $error_messages['fullname']; ?></span><?php endif; ?>
					</div>
					<div>
						<label for="email">Email Address: <strong>*</strong></label>
						<input type="text" name="email" value="<?php echo isset($_POST['email'])? $_POST['email'] : ''; ?>" id="email" />
						<?php if(in_array('email', $validation)): ?><span class="error"><?php echo $error_messages['email']; ?></span><?php endif; ?>
					</div>
					<div>
						<label for="comment">Comment: <strong>*</strong></label>
						<textarea name="comment" id="comment"><?php echo isset($_POST['comment'])? $_POST['comment'] : ''; ?></textarea>
						<?php if(in_array('comment', $validation)): ?><span class="error"><?php echo $error_messages['comment']; ?></span><?php endif; ?>
					</div>
					<p class="mand">* Mandatory fields</p>
					<div class="submit">
						<input type="submit" name="submit" value="Send" id="submit" />
					</div>
				</fieldset>
			</form>
		<?php else: ?>
			<p>Thank you for your feedback!</p>
		<?php endif; ?>
	</body>
</html>