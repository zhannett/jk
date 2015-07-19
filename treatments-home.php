<?php
$tableName 			= "product_1";					// database table
$selectFields		= "id,name,longdesc";			// fields to select in the sql query
$where				= "pclass equals NULL";
$resultLimit		= 6;
$paginate			= true;
$screen 			= "xsl/products-home.xsl.php";		// screen structure include file


// HTTP_GET/POST stuff

if ( isset ( $_GET["page"] ) )
	$page = $_GET["page"];

require ( "std-include.inc" );
?>
