<?php
/*
	//include files
	require_once '../../includes/common/config.php';
	require_once '../../includes/common/db.php';
	require_once '../jsonwrapper/jsonwrapper.php';
	
	//get Database connection to simplystat database
	$connection = getConn("simplystat");
	
	//create sql statement
	$sql = "SELECT * FROM states";
	
	//query the database
	$result = mysqli_query($connection, $sql);
	
	if(mysqli_num_rows($result) > 0) {
		//loop over results and build XML
		while($obj = mysqli_fetch_object($result)){
		  $arr[] = $obj;
		}
	}
		
	echo '{rows:' .json_encode($arr);
*/	
$rows = array({"id"=>1,"state"=>'California'},{"id"=>2,"state"=>'New York'},{"id"=>3,"state"=>'Indiana'});

		
echo '{rows:' .json_encode($array);
?>
