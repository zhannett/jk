<?php
	$drawDownOrder = $_GET['drawDownOrder'];
	if (file_exists("json/drawDownOrderDetails.json")) {
		$jsondata = file_get_contents("json/drawDownOrderDetails.json");
		$obj = json_decode($jsondata, true);
		foreach ($obj as $current) {
			if ($current['drawDownOrder'] == $drawDownOrder) {
				$data = array("currency" => $current['currency'], "originalAmount" => $current['originalAmount'], "rate" => $current['rate'], "remainingBalance" => $current['remainingBalance']);
				$response = json_encode($data);
				echo $response;
			}
		}
	 } else {
		 echo "<h1>Failed</h1>File doesn't exist";
		exit;
	 }
?>