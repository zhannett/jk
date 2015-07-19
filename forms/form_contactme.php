<?php
	require_once "validation_contactme.php";	
	
	$errors = array();
	if (isset($_POST["submitted"])) {
	
		function spam_scrubber($value) {
			$very_bad = array('to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:');
			
			foreach($very_bad as $v) {			
				if(stripos($value, $v) !== false) return '';
			}			
			$value = str_replace(array("\r", "\n", "%0a", "%0d"), ' ', $value);
			return trim($value);
		}
		$scrubbed = array_map('spam_scrubber', $_POST);
				
		
		 foreach ($scrubbed as $field => $data) {
			$check = validate($field, $data);
			if ($check != "") {
				$errors[$field] = $check;
			} 
		 };
		  
		 if (count($errors) == 0) {
		  		require_once('../code/mysqli_connect.php');
			    foreach ($scrubbed as $data) {
					$data = mysqli_real_escape_string($dbc, trim($scrubbed[$data]));
			    };
				mysqli_close($dbc);
				
				$to = 'janetkulyk@yahoo.com'; 
				$subject = 'MESSAGE FROM janetkulyk.com WEB SITE'; 
				$body = 'Name: ' . $scrubbed['first_name'] . ' ' . $scrubbed['last_name'] . '   Content:  ' . $scrubbed['message'] ; 
				$body = wordwrap($body,70);
				$headers = 'From: ' . $_POST['email']; 
				mail($to, $subject, $body, $headers);  
				echo "<div class='feedback_yes'><p>Thank you for contacting me at " . date('g:i a (T)') . " on " . date('l F j, Y') . ". I will reply shortly.</p></div>";
				
				$scrubbed = array();
				$_POST = array();
		 }
	}
?>


<form action="contact.php" method="post" accept-charset="utf-8">
	<fieldset id="formcontactme">
		<p class="form_intro">Please fill out this form to contact me.</p>	
		<ul>
			<li>
				<label for="first_name">First Name:</label>
				<input type="text" id="first_name" name="first_name" size="15" maxlength="20" value="<?php if(isset($scrubbed['first_name'])) echo $scrubbed['first_name']; ?>" />
				<div class="error"><?php if (array_key_exists("first_name",$errors)) echo $errors["first_name"]; ?></div>
			</li>
			<li>
				<label for="last_name">Last Name:</label> 
				<input type="text" id="last_name" name="last_name" size="15" maxlength="20" value="<?php if(isset($scrubbed['last_name'])) echo $scrubbed['last_name']; ?>" />
				<div class="error"><?php if (array_key_exists("last_name",$errors)) echo $errors["last_name"]; ?></div>
			</li>
			<li>
				<label for="email">Email Address:</label> 
				<input type="text" id="email" name="email" size="20" maxlength="80" value="<?php if(isset($scrubbed['email'])) echo $scrubbed['email']; ?>" />
				<div class="error"><?php if (array_key_exists("email",$errors)) echo $errors["email"]; ?></div>
			</li>
			<li>
				<label for="message">Message<br/>(250 characters max):</label>
				<textarea name="message" id="message" rows="5" cols="40" ><?php if(isset($scrubbed['message'])) echo $scrubbed['message']; ?></textarea>
				<div class="error"><?php if (array_key_exists("message",$errors)) echo $errors["message"]; ?></div>
			</li>
			<li>
				<button type="submit" name="submit">Send</button>
			</li>
		</ul>
		<input type="hidden" name="submitted" value="TRUE" />
	</fieldset>
</form>
