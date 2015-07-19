<?php
	DEFINE('DB_USER', 'janetkul_forum');
	DEFINE('DB_PASSWORD','hiddensiber');
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_NAME','janetkul_forum');
	
	$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) OR die('Could not connect to MySQL: ' . mysqli_connect_error());
	mysqli_select_db($dbc,DB_NAME);
	mysqli_set_charset($dbc, 'utf8');
	//mysqli_query($dbc, 'SET NAMES utf8');
?>
