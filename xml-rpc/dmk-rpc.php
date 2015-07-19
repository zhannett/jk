<?php

/* dmk-xml-rpc.php - external request processor for Surelynx based DMK Applicaions */

$action = isset ( $_GET["action"] ) ? $_GET["action"] : false;

switch ( $action ) {

	case "articles-list":
		$tableName 			= "files";
		$selectFields		= "id,name";
		$where				= "name like 'dmk-articles%' and name != 'dmk-articles-root'";
		$screen				= "output-filters/dbresults2javascript.php";
		break;
	case "pdtc-mail":
		syslog ( LOG_NOTICE, print_r ( $_GET ) );
		$msg = "PDTA Inquiry from dmkcanada.com:\n\n" .
			 	 $_GET["fullName"] . "\n" .
				 $_GET["street"] . "\n".
				 $_GET["city"] . "\n".
				 $_GET["state"] . "\n".
				 $_GET["zip"] . "\n".
				 $_GET["email"] . "\n".
				 $_GET["npa"] . "-" . $_GET["nxx"] . "-" . $_GET["num"] . "\n";

		$sub = "PDTA Inquiry from dmkcanada.ca";
			
		$headers = 'From: webmaster@dmkcanada.ca' . "\r\n" .
   'Reply-To: ' . $_GET["email"] . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
		$to = "elena@dmkcanada.ca";
		mail ( $to, $sub, $msg, $headers );
	
		break;
	default:
		putenv ( "scriptError=Data sent to this interface is not recognizable" );
		break;
	
}
include ( "std-include.inc" );


?>
