<?php
	$disbursementOrder = $_GET['disbursementOrder'];
	if (file_exists("json/disbursement.json")) {
		$jsondata = file_get_contents("json/disbursement.json");
		$obj = json_decode($jsondata, true);
		foreach ($obj as $current) {
			if ($current['disbursementOrder'] === $disbursementOrder) {
				//echo ('<h1>' . $current['disbursementOrder'] . '</h1>');
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