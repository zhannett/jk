<?php

/**
Validate an email address. Provide email address (raw input) Returns true if the email address has the email address format and the domain exists. */

function validate($field, $value) {
  switch ($field) {
	  case "first_name":
	  	if($value == '') {
			return "Please enter your first name";
		} else if($value == is_numeric($value)) {
			return "Please enter a valid first name";
		}
		else {
			return "";
		}
		break;
		
	  case "last_name":
	  	if($value == '') {
			return "Please enter your last name";
		} else if($value == is_numeric($value)) {
			return "Please enter a valid last name";
		}
		else {
			return "";
		}
		break;
		
	  case "email":
	  	if($value == '') {
			return "Please enter your email";
		} else if(!preg_match('/^[\w.-]+@[\w.-]+\.[A_Za-z]{2,6}$/',trim($value))) {
			return "Please enter a valid email";
		}
		else {
			return "";
		}
		break;		
	 case "message":
		if($value == '') {
			return "Please enter your message";
		} else {
			return "";
		}
		break;
      
      default:
        return "";
  }
}

?>