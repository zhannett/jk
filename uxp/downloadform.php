<?php
// Configure our email variables
$email1_to = $_POST['email'];
$email2_to = 'gemini.waghmare@uxpsystems.com, arif.hirani@uxpsystems.com';
$email1_subject = 'UXP Systems Thought Paper';
$email2_subject = 'Whitepaper downloaded';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

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
		$email1_content = 'Dear  ' . $_POST['fullname'] . ',' . "\r\n". 'Thank you for your interest in UXP Systems.' . "\r\n" . 'Please download your thoughpaper from <a href="http://www.uxpsystems.com/pdf/2011-04-11 UXP Thought Paper.pdf">this link</a>';
		$email2_content = 'Name: ' .  $_POST['fullname'] . "\r\n" . 'Email: ' . $_POST['email'] . "\r\n" . 'Comment: ' . $_POST['comment'];
		
		// Let's build our simple email content
		foreach($_POST as $key => $value) {
			if($key != 'submit') $email_content .= $key . ': ' . $value . "\n";
		}
		
		// The validation passed, so send the email
		mail($email1_to, $email1_subject, $email1_content, $headers);
		mail($email2_to, $email2_subject, $email2_content);
		
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
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>UXP Systems, Inc. - Download Form</title>
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" type="text/css" href="css/uxp.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/downloadform.css" media="screen" />
        <!--[if IE 8]>
        	<link rel="stylesheet" type="text/css" href="css/uxp_ie8.css" media="screen" /> 
		<![endif]-->
        <!--[if IE 7]>
        	<link rel="stylesheet" type="text/css" href="css/uxp_ie7.css" media="screen" /> 
		<![endif]-->
        <!--[if IE 6]>
        	<link rel="stylesheet" type="text/css" href="css/uxp_ie6.css" media="screen" /> 
		<![endif]-->
        <script type="text/javascript" src="js/mootools-1.2.4-core-yc.js"></script>
        <script type="text/javascript" src="js/validation.js"></script>
    </head>
    
     <body>
        <div class="page">    
            <?php include("inc/header.inc.php") ?>
            <div class="content">
                <h1><span>UXP SYSTEMS</span>DOWNLOAD FORM</h1>
                <div class="title_bar"></div>
                <div class="colleft">
                </div>
                <div class="colright">
                    <div class="colrightcontainer">
                        <h2>Download Form</h2>
                        <?php include("inc/downloadform.inc.php") ?>
                    </div>
                </div>
            </div>
            <?php include("inc/footer.inc.php") ?>
          </div>
    </body>
</html>
