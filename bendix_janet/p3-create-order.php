<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title>Create Order</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="css/spottrade.css" media="screen" />
    </head>
    <body>
    	<div class="page">
             <?php include ('inc/header.inc.php');  ?>
             <?php include ('inc/topnav.inc.php');  ?>
             <div id="content">
                <div class="title">
                    <h2>Create Order</h2>
                    <div id="progressbar"></div>
                    <div id="progressnum"></div>
                    <span class="ref">Reference #: ST001002003-BT0001</span>
                </div>
                <form id="savedSpottrade" action="" method="">
                    <fieldset>
                        <ul id="tradedata2">
                            <li>
                                <label for="selectAction">Order</label><br/>
                                <select id="selectAction">
                                    <option>BUY</option>
                                    <option>SELL</option>
                                </select>
                            </li>
                            <li>
                                <label for="selectCurrency2">Currency</label><br/>
                                <select id="selectCurrency2" class="currency2"></select>
                            </li>
                            <li>
                                <label for="amount2">Amount</label><br/>
                                <input type="text" id="amount2" value="" />
                            </li>
                            <li>
                                <label for="selectNumOfPayments"># of Payments</label><br/>
                                <select id="selectNumOfPayments">
                                    <option selected="selected">MULTIPLE</option>
                                    <option>SINGLE</option>
                                </select>
                            </li>
                             <li>
                                <label for="rate">Rate</label><br/>
                                <input type="text" id="rate" class="saved" />
                            </li>
                            <li>
                                <label for="selectCurrency1">Pay By</label><br/>
                                <select id="selectCurrency1" class="currency1"></select>
                            </li>
                            <li>
                                <label for="amount1">Pay Amount</label><br/>
                                <input type="text" id="amount1" value="" />
                            </li>
                            <li>
                                <label for=selectPayment"">Payment</label><br/>
                                <select id="selectPayment"></select>
                            </li>
                            <li>
                                 <span id="fee"></span>
                            </li>
                            <li>
                                <button id="btn_quote">QUOTE</button><br/>
                                <button id="btn_lockin">LOCK IN</button><br/>
                                <button id="btn_clear">Clear</button>
                            </li>
                        </ul>
                     </fieldset>	
					 <?php include ('inc/benPaymentMngr1.inc.php');  ?>
                 </form>
                  <?php include ('inc/grandTotals.inc.php');  ?>
                     <div class="buttons">
                        <button id="btnSaveOrder">Save Order</button>
                        <button id="btnClearOrder" type="reset">Clear Order</button>
                        <button id="btnPostForApproval">Post for Approval</button>
                     </div>
         		</div>
             	<?php include ('inc/footer.inc.php');  ?>
         	</div>
            <div id="dialog-two-amounts">
                <p>You cannot have both amount fields filled!</p>
                <button id="btnOK">OK</button>
            </div>
            <div id="dialog-remove">
                <p>Are you sure you want to remove this record?</p>
                <button id="btnRemoveRecord">Yes</button>
                <button id="btnCancel">Cancel</button>
            </div>
            <?php include ('inc/popup_info.inc.php');  ?>
         	<?php include ('inc/scripts.inc.php');  ?>
            <script type="text/javascript" src="js/bpm344a4b.js"></script>
            <script type="text/javascript">
				function getOrderDetails(order) {
					'use strict';
					$.ajax({
						url			: 'getOrderDetails.php',
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
							$('#date').text(res.date);
							$('#selectAction option:selected').val(res.action);
							$('#selectCurrency1 option:selected').text(res.currency1);
							$('#selectCurrency2 option:selected').text(res.currency2);
							//$('#amount1').val(res.amount1.formatMoney(2, '.', ','));
							$('#amount1').text(res.amount1.formatMoney(2, '.', ','));
							$('#selectProduct option:selected').val(res.product);
							$('#rate').val(res.rate);
							$('#amount2').val(res.amount2.formatMoney(2, '.', ','));
							$('#selectdPayment option:selected').val(res.payment);
							$('#benCurrency').text(res.currency2);
							$('#fee').val(res.fee.formatMoney(2, '.', ',')).hide();
							
							if ($('#btn_quote').attr('disabled') === 'disabled') {
								$('#btn_quote').removeAttr('disabled');
							}
							$('#btn_lockin').attr("disabled", "disabled");
						},
						error		: function (res) {
							if (console && console.log) {
								console.log('Error: ' + res.status + ' ' + res.statusText + res.responseText);
							}
						}
					});
				}
				window.onload = function () {
					'use strict';
					ratesFunc.populateCurrencies();
					ratesFunc.populatePayments();
					$('#selectAction').val(user.defaultAction);
					$('#beneficiary ul li.first').css('width', '130px');
					$('#amount1').attr('readonly', false).val('');
					$('#amount2').attr('readonly', false).val('');
					populateSelectOrder();
					if (($('#amount1').val() === '' && $('#amount2').val() === '') || ($('#amount1').val() !== '' && $('#amount2').val() !== '')) {
						$("#progressbar").hide();
					} else {
						$("#progressbar").show();
					}
					$("#progressbar").progressbar({"value" : 0});
					if ($('#btn_quote').attr('disabled') === 'disabled') {
						$('#btn_quote').removeAttr('disabled');
					}
					$('#btn_lockin').attr("disabled", "disabled");
					getOrderDetails($('#order option:selected').val());
					ratesFunc.getRate(user.defaultAction, user.defaultCurrency1, user.defaultCurrency2);
					$('#benCurrency').text(user.defaultCurrency2);
					$('#benCurrencyRem').text(user.defaultCurrency2);
					benFunc.getBeneficiary();
					benFunc.getBeneficiaries($('#selectBeneficiary option:selected').val());
					if ($('#amount2').val() === '') {
						$('#benAmountRem').text('0.00');
					}
					$('form').submit(function (e) {
						return false;
					});
					$('#topnav .spot').addClass('active');
				};
			</script>
    </body>
</html>