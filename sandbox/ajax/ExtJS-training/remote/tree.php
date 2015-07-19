<?php
	$nodeType = $_REQUEST["type"];
	$nodes = array();
	
	switch($nodeType) {
		case 'root':
			$node = array('text' => 'Category1', 'type' => 'category', 'leaf' => false);
			array_push($nodes,$node);		
			break;
		case 'category':
			$node = array('text' => 'Item1', 'type' => 'item', 'leaf' => true);
			array_push($nodes,$node);
			break;
	}
	
	echo json_encode($nodes);
?>