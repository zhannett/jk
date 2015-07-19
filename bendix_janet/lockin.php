<?php
	$action = $_GET['action'];
	$currency1 = $_GET['currency1'];
	$currency2 = $_GET['currency2'];
	$currencies = $_GET['currencies'];
	$rate = $_GET['rate'];
	$amount = $_GET['amount'];
	
	echo('action = ' . $action . 'currency1 = ' . $currency1 . 'currency2 = ' . $currency2 . ' currencies = ' . $currencies . ' rate = ' . $rate . ' amount = ' . $amount);
?>