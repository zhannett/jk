<?php
$tableName          = "files";                  // database table
$selectFields       = "id,name,contents";       // fields to select in the sql query
$screen 			= "xsl/articles.xsl.php";		// screen structure include file file

if ( $_GET["id" ] ) {
	$where				= "id=" . $_GET["id"];
	//$screen 			= "xsl/article.xsl.php";		// screen structure include file file
}
else {
	$where				= "name='dmk-articles-root'";
}
require ( "std-include.inc" );
?>
