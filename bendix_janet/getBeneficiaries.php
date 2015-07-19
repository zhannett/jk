<?php
	$beneficiary = $_GET['beneficiary'];
	if (file_exists("json/getBeneficiaries.json")) {
		$jsondata = file_get_contents("json/getBeneficiaries.json");
		$obj = json_decode($jsondata, true);
		//print count($obj);
		foreach ($obj as $current) {
			if ($current['beneficiary'] == $beneficiary) {
				//echo $current['currencies'];
				$data = array("beneficiaryAccounts" => $current['beneficiaryAccounts'], "savedBenNotes" => $current['savedBenNotes'], "beneficiaryBankInfo" => $current['beneficiaryBankInfo']);
				$response = json_encode($data);
				echo $response;
			}
		}
	 } else {
		 echo "<h1>Failed</h1>File doesn't exist";
		exit;
	 }
?>