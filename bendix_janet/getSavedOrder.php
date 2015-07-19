<?php
	$order = $_GET['order'];
	if (file_exists("json/getSavedOrder.json")) {
		$jsondata = file_get_contents("json/getSavedOrder.json");
		$obj = json_decode($jsondata, true);
		foreach ($obj as $current) {
			if ($current['order'] == $order) {
				$data = array("date" => $current['date'], "action" => $current['action'], "currency1" => $current['currency1'], "currency2" => $current['currency2'], "amount1" => $current['amount1']);
				$response = json_encode($data);
				echo $response;
			}
		}
	 } else {
		 echo "<h1>Failed</h1>File doesn't exist";
		exit;
	 }
?>