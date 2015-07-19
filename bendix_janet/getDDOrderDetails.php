<?php
	$order = $_GET['order'];
	if (file_exists("json/ddOrders.json")) {
		$jsondata = file_get_contents("json/ddOrders.json");
		$obj = json_decode($jsondata, true);
		foreach ($obj as $current) {
			if ($current['order'] == $order) {
				$data = array("currency" => $current['currency'], "origAmount" => $current['origAmount'], "rate" => $current['rate'], "fee" => $current['fee']);
				$response = json_encode($data);
				echo $response;
			}
		}
	 } else {
		 echo "<h1>Failed</h1>File doesn't exist";
		exit;
	 }
?>