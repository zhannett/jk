<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title>Create Disbursement Order</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="css/spottrade.css" media="screen" />
        <style type="text/css">
			.li_beneficiary {
				width: 110px;	
			}
		</style>
    </head>
    <body>
    	<div class="page">
        	<?php include ('inc/header.inc.php');  ?>
            <?php include ('inc/topnav.inc.php');  ?>
         	<div id="content">
                <div class="title">
                    <h2>Create Disbursement Order</h2>
                    <span>Reference #: ST001007-DS0001 (Spot Trade #ST001007)</span>
                </div>
            	<form id="savedSpottrade" action="" method="">
                	<fieldset>
                		<ul id="tradedata2">
                        <li>
                        	<label for="savedDisbOrders">Saved Orders</label><br/>
                            <select id="savedDisbOrders"></select>
                        </li>
                        <li>
                        	<label for="currency">Currency</label><br/>
                            <span id="currency" class="saved"></span>
                        </li>
                        <li>
                        	<label for="origAmount">Original Amount</label><br/>
                            <span id="origAmount" class="saved"></span>
                        </li>
                         <li>
                        	<label for="rate">Rate</label><br/>
                            <span id="rate" class="saved"></span>
                        </li>
                        <li>
                        	<label for="disbAmount">Disbursement Amount</label><br/>
                            <input type="text" id="disbAmount" value="" />
                        </li>
                        <li>
                        	<label for="selectType">Type</label><br/>
                            <select id="selectType">
                            	<option>WIRE</option>
                                <option>ACH</option>
                                <option>DRAFT</option>
                                <option>CHEQUE</option>
                            </select>
                        </li>
                        <li>
                        	<label for="remainingBalance">Remaining Balance</label><br/>
                            <div id="remainingBalance" class="saved"></div>
                        </li>
                        <!--
                        <li>
                        	 <span id="fee"></span>
                        </li-->
                       
                    </ul>
                </fieldset>	
           <?php include ('inc/benPaymentMngr1.inc.php');  ?>
            </form>
            <?php include ('inc/grandTotals8.inc.php');  ?>
                
                <div class="buttons">
                    <button id="btnSaveOrder">Save Draw Down</button>
                    <button id="btnClearOrder" type="reset">Clear All</button>
                    <button id="btnPostForApproval">Post for Approval</button>
                </div>
            </div>
           <?php include ('inc/footer.inc.php');  ?>
        </div>
        <div id="dialog-remove">
            <p>Are you sure you want to remove this record?</p>
            <button id="btnRemoveRecord">Yes</button>
            <button id="btnCancel">Cancel</button>
        </div>
        <?php include ('inc/popup_info.inc.php');  ?>
    	<?php include ('inc/scripts.inc.php');  ?>
        <script type="text/javascript" src="js/bpm89.js"></script>
        <script type="text/javascript">
			function getDisbOrderDetails(order) {
				'use strict';
				$.ajax({
					url			: 'getDisbOrderDetails.php',
					type		: 'get',
					data		: {
						"order"	: order
					},
					dataType	: 'json',
					success		: function (res) {
						var key;
						if (console && console.log) {
							console.log('Success getOrderDetails! ' + res);
						}
						//$('#amount1').val(res.amount1.formatMoney(2, '.', ','));
						$('#currency').text(res.currency);
						$('#origAmount').text(res.origAmount.formatMoney(2, '.', ','));
						$('#selectProduct option:selected').val(res.product);
						$('#rate').text(parseFloat(res.rate).toFixed(9));
						
						$('#selectdPayment option:selected').val(res.payment);
						$('#benCurrency').text(res.currency);
						$('#fee').val(res.fee.formatMoney(2, '.', ',')).hide();
						$('#remainingBalance').text($('#origAmount').text());
						$('#benCurrencyRem').text($('#currency').text());
						$('#benAmountRem').text($('#origAmount').text());
					},
					error		: function (res) {
						if (console && console.log) {
							console.log('Error: ' + res.status + ' ' + res.statusText + res.responseText);
						}
					}
				});
			}
			function populateDisbOrders() {
				'use strict';
				var j,
					max1;
				for (j = 0, max1 = user.disbOrders.length; j < max1; j += 1) {
					$('#savedDisbOrders').append('<option>' + user.disbOrders[j] + '</option>');
				}
			};
			$('#savedDisbOrders').change(function () {
				console.log('savedDisbOrders changed ' + $('#savedDisbOrders option:selected').val());
				getDisbOrderDetails($('#savedDisbOrders option:selected').val());
			});
			$('#disbAmount').blur( function() {
				var remainingBalance = parseFloat($('#origAmount').text().replace(/,/g, '')) - parseFloat($('#disbAmount').val().replace(/,/g, '')),
					strRemainingBalance = remainingBalance.formatMoney(2, '.', ',');
				$('#remainingBalance').text(strRemainingBalance);
			});
			window.onload = function () {
				'use strict';
				populateDisbOrders();
				getDisbOrderDetails($('#savedDisbOrders option:selected').val());
				$('#beneficiary ul li.first').css('width', '130px');
				$('#benCurrency').text(user.defaultCurrency2);
				$('#benCurrencyRem').text(user.defaultCurrency2);
				benFunc.getBeneficiary();
				benFunc.getBeneficiaries($('#selectBeneficiary option:selected').val());
				$('form').submit(function (e) {
					return false;
				});
				$('#topnav .spot').addClass('active');
			};
		</script>
    </body>
</html>