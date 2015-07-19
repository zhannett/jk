<?php
	$action = $_GET['action'];
	$currency1 = $_GET['currency1'];
	$currency2 = $_GET['currency2'];
	$currencies = $currency1 . "/" . $currency2;
	if (file_exists("json/rates.json")) {
		$jsondata = file_get_contents("json/rates.json");
		$obj = json_decode($jsondata, true);
		//print count($obj);
		foreach ($obj as $current) {
			if ($current['action'] == $action && $current['currency1'] == $currency1 && $current['currency2'] == $currency2) {
				//echo $current['currencies'];
				$data = array("action" => $current['action'], "currency1" => $current['currency1'], "currency2" => $current['currency2'], "rate" => $current['rate']);
				$response = json_encode($data);
				echo $response;
			}
		}
	 } else {
		 echo "<h1>Failed</h1>File doesn't exist";
		exit;
	 }
?>