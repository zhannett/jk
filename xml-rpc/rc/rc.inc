<?php

// DEFAULT PATHS
$webDocsDir		= "/var/www/docs/dmk-web";
$feIncludesDir 	= "~/scottd/dmk-web/web/inc"; // front end includes
$beIncludesDir	= "/var/surelynx/php/includes"; // back end includes

// DATABASE CONNECT PARAMETERS.

$dbi        = "mysql";          // database type - "mysql", "mysqli", "oci", "sldb" etc...
$dbUser     = "scottd";       	// duh!
$dbPass   	= "f3rr1s";  	    // duh!
$dbHost     = "mysqldatabase"; // refer to /etc/hosts
$dbPort     = "3306";           // duh!
$dbName     = "loyalty";       // for mysql since it contains many databases.


ini_set ( "include_path", $beIncludesDir . ":". $webDocsDir . "/inc" );
include_once ( "database-env.inc" );
?>
