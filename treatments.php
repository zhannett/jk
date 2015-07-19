<?php

$tableName 			= "product_1";					// database table
$selectFields		= "id,name,longdesc";		// fields to select in the sql query
$where				= "id in (253,254,255,256)";
$orderBy			= "name";
$screen 			= "xsl/treatments.xsl.php";		// screen structure include file file

require ( "std-include.inc" );
?>
