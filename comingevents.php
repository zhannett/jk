<?php
$tableName 			= "comingevents";				// database table
$selectFields		= "id,headline,body,createdate";			// fields to select in the sql query
$where			= "deleted!=1 and cid=11";
$orderBy			= "id DESC";
$screen 			= "xsl/comingevents.xsl.php";		// screen structure include file


// HTTP_GET/POST stuff

if ( isset ( $_GET["page"] ) )
	$page = $_GET["page"];

require ( "std-include.inc" );
?>
