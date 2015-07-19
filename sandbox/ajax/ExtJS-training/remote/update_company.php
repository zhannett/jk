<?php
	$data = json_decode($_POST['data']);
	$id = $_POST['id'];
	
	// retrieve record from database, update it.
	
	// always return a record back for an update action
	
	$res = array(
		'success' => true,
		'data' => array('id' => $id)
	);
	
	echo json_encode($res);
	
?>