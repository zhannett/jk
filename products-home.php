<?php

$products = isset ( $_GET["products"] ) ? $_GET["products"] : false; 
$tableName 			= "product_1";				// database table
$selectFields		= "id,name,longdesc";			// fields to select in the sql query
if ( $products || $products=="" )
	$where				= "id in ($products)";
else {
	$where				= "pclass='Home'";
	$resultLimit        = 6;
	$paginate           = true;
	$screen 			= "xsl/products-home.xsl.php";		// screen structure include file
}

$orderBy			= "name";
$screen             = "xsl/products.xsl.php";
	

// HTTP_GET/POST stuff

if ( isset ( $_GET["page"] ) )
	$page = $_GET["page"];

require ( "std-include.inc" );
?>
