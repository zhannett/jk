/*global $: true, console: true, alert: true, clearInterval: true, clearTimeout: true, document: false, event: false, frames: false, history: false, Image: false, location: false, name: false, navigator: false, Option: false, parent: false, screen: false, setInterval: true, setTimeout: false, window: true, XMLHttpRequest: true */
var user  = {
		"defaultAction"		: "BUY",
		"defaultCurrency1"	: "GBP",
		"defaultCurrency2"	: "CAD",
		"defaultTimePeriod"	: 60, // in seconds
		"orders"			: ["#ST001002003-BT0001", "#ST001002003-BT0002", "#ST001002003-BT0003"],
		"ddOrders"			: ["Forward #F001007", "Forward #F001008", "Forward #F001009"],
		"disbOrders"		: ["Spot Trade #ST001007", "Spot Trade #ST001008", "Spot Trade #ST001009"],
		"beneficiaries"		: ["JP Ben-001", "JP Ben-002", "JP Ben-003"],
		"status"			: ["A", "R"]
	},
	ratesFunc = {
		populateCurrencies	: function () {
			'use strict';
			$.ajax({
				url			: 'json/currencies.json',
				dataType	: 'json',
				success		: function (data) {
					var cur,
						str1 = '',
						str2 = '';
					if (console && console.log) {
						console.log('Success! currencies ' +  data);
					}
					for (cur = 0; cur < data.length; cur += 1) {
						if (data[cur] === user.defaultCurrency1) {
							str1 += '<option selected="selected">' + data[cur] + '</option>';
						} else {
							str1 += '<option>' + data[cur] + '</option>';
						}
					}
					for (cur = 0; cur < data.length; cur += 1) {
						if (data[cur] === user.defaultCurrency2) {
							str2 += '<option selected="selected">' + data[cur] + '</option>';
						} else {
							str2 += '<option>' + data[cur] + '</option>';
						}
					}
					$('#selectCurrency1').append(str1);
					$('#selectCurrency2').append(str2);
				},
				error		: function (data) {
					if (console && console.log) {
						console.log('Error: ' + data.status + ' ' + data.statusText);
						console.log('Error:', data.responseText);
					}
				}
			});
		},
		populatePayments	: function () {
			'use strict';
			$.ajax({
				url			: 'json/payments.json',
				dataType	: 'json',
				success		: function (data) {
					var p,
						str = '';
					if (console && console.log) {
						console.log('Success! payments ' +  data);
					}
					for (p = 0; p < data.length; p += 1) {
						str += '<option>' + data[p] + '</option>';
					}
					$('#selectPayment').append(str);
				},
				error		: function (data) {
					if (console && console.log) {
						console.log('Error: ' + data.status + ' ' + data.statusText);
						console.log('Error:', data.responseText);
					}
				}
			});
		},
		getRate	: function (action, currency1, currency2) {
			'use strict';
			$('#actionSelected option:selected').val(action);
			$('#selectCurrency1 option:selected').val(currency1);
			$('#selectCurrency2 option:selected').val(currency2);
			$.ajax({
				url			: 'rates.php',
				type		: "get",
				data		: {
					"action"	: action,
					"currency1"	: currency1,
					"currency2"	: currency2
				},
				dataType	: 'json',
				success		: function (res) {
					var timestamp1,
						timerID,
						updateProgress,
						progressTxt = '',
						amount1;
					function updateProgress() {
						var progress = $('#progressbar').progressbar('option', 'value'),
							progressTxt = '';
						if (progress < 100) {
							$('#progressbar').progressbar({"value": (new Date().getTime() - timestamp1) * 0.1 / user.defaultTimePeriod});
							progressTxt = 'Time remaining: ' + Math.round(user.defaultTimePeriod - (new Date().getTime() - timestamp1) / 1000) + ' seconds';
							$('#progressnum').text(progressTxt);
							$('#btn_lockin').removeAttr('disabled');
						} else {
							$("#progressbar").progressbar({"value" : 0});
							progressTxt = 'Time remaining: 0 seconds';
							$('#progressnum').text(progressTxt);
							$('#rate').html('');
							$('#btn_lockin').attr('disabled');
							clearInterval(timerID);
						}
					}
					console.log(res);
					if (console && console.log) {
						if (res.length === 0) {
							console.log("The rate is missing in JSON file");
						} else if (res.length > 1) {
							console.log("Something is wrong with JSON QUOTES file: res > 1");
						} else {
							console.log('Success!');
						}
						console.log('Sucess getRate:  action = ' + res.action + '; currency1 =  ' + res.currency1 + '; currency2 = ' + res.currency2 + '; rate =  ' + res.rate);
					}
					$('#action').text(res.action);
					//$('#currencies').val(res.currencies);
					$('#rate').val(parseFloat(res.rate).toFixed(9));
					//console.log('quote: ' + $('#rate').html());
					//$('#amount1').val(parseFloat((parseFloat($('#amount2').val().replace(/,/g, '')) / parseFloat(res.rate)).formatMoney(2, '.', ',')));
					/********/
					if (isNaN($('#amount1').val().replace(/,/g, '')) || isNaN($('#amount2').val().replace(/,/g, ''))) {
						$('#progressbar').hide();
						$('#progressnum').hide();
						$('#amount1').val('');
						$('#amount2').val('');
					}
					if (($('#amount1').val() === '' || $('#amount1').val() === '0.00') && ($('#amount2').val() === '' || $('#amount2').val() === '0.00')) {
						$('#progressbar').hide();
						$('#progressnum').hide();
						$('#amount1').val('');
						$('#amount2').val('');
					} else {
						//console.log(parseFloat($('#amount2').val().replace(/,/g, '')));
						if (($('#amount1').val() === '' || $('#amount1').val() === '0.00') && $('#amount2').val() !== '') {
							$('#amount1').val((parseFloat($('#amount2').val().replace(/,/g, '')) * parseFloat(res.rate)).formatMoney(2, '.', ','));
							$('#btn_quote').attr('disabled', 'disabled');
						}
						if (($('#amount2').val() === '' || $('#amount2').val() === '0.00') && $('#amount1').val() !== '') {
							$('#amount2').val((parseFloat($('#amount1').val().replace(/,/g, '')) / parseFloat(res.rate)).formatMoney(2, '.', ','));
							$('#btn_quote').attr('disabled', 'disabled');
						}
						$('#progressbar').show().progressbar({"value" : 0});
						progressTxt = 'Time remaining: ' + user.defaultTimePeriod + ' seconds';
						$('#progressnum').show().text(progressTxt);
						timestamp1 = new Date().getTime();
						timerID = window.setInterval(updateProgress, 1000);
						$('#btn_clear').click(function () {
							console.log('btn Clear clicked');
							clearInterval(timerID);
							$("#progressbar").progressbar({"value" : 0});
							progressTxt = 'Time remaining: ' + user.defaultTimePeriod + ' seconds';
							$('#progressnum').show().text(progressTxt);
							$('#amount1').val('');
							$('#amount2').val('');
							if ($('#btn_quote'.attr('disabled')) === 'disabled') {
								$('#btn_quote').removeAttr('disabled');
							}$('#btn_lockin').attr('disabled', 'disabled');
						});
					}
					/*********/
					$('#btn_lockin').click(function () {
						clearInterval(timerID);
						$('#amount1').attr('readonly', true);
						$('#amount2').attr('readonly', true);
						$("#progressbar").hide();
						$("#progressnum").hide();
						$('#btn_quote').hide();
						$('#btn_clear').hide();
						$(this).hide();
						$('#benAmountRem').text(parseFloat($('#amount2').val().replace(/,/g, '')).formatMoney(2, '.', ','));
					});
				},
				error		: function (res) {
					if (console && console.log) {
						console.log('Error: ' + res.status + ' ' + res.statusText);
						console.log('Error:', res.responseText);
						console.log('readyState: ' + res.readyState + '\nstatus: ' + res.status);
						console.log('responseText: ' + res.responseText);
					}
				}
			});
		},
		clearRate		: function () {
			'use strict';
			$('#rate').html('');
		}
	},
	benFunc = {
		getBeneficiary : function () {
			'use strict';
			var i;
			for (i = 0; i < user.beneficiaries.length; i += 1) {
				$('#selectBeneficiary').append('<option>' + user.beneficiaries[i] + '</option>');
			}
		},
		getBeneficiaries	: function (beneficiary) {
			'use strict';
			$.ajax({
				url			: 'getBeneficiaries.php',
				type		: 'get',
				data		:  {"beneficiary": beneficiary},
				dataType	: 'json',
				success		: function (res) {
					var str = '',
						i,
						ffcString;
					if (console && console.log) {
						console.log('Success!');
						console.log('Success! Disbursement Order = ' + res.beneficiaryAccounts + ' ' + res.savedBenNotes + ' ' + res.beneficiaryBankInfo);
						$('#currency2').text(res.currency);
						$('#origAmount').text(res.originalAmount);
						$('#rate').text(res.rate);
						$('#remBalance').text(res.remainingBalance);
					}
					for (i = 0; i < res.beneficiaryAccounts.length; i += 1) {
						str += '<option>' + res.beneficiaryAccounts[i] + '</option>';
					}
					$('#savedBenNotes').text(res.savedBenNotes);
					$('#beneficiaryBankInfo').text(res.beneficiaryBankInfo);
					if (console && console.log) {
						console.log(str);
					}
					$('#beneficiaryAccountNum').html(str);
					ffcString = '<option>' + $('#beneficiaryAccountNum option:selected').val() + ' FFC ' + $('#selectBeneficiary option:selected').val() + '</option><option>' + $('#beneficiaryAccountNum option:selected').val() + ' noFFC ' + $('#selectBeneficiary option:selected').val() + '</option>';
					$('#ffc').html(ffcString);
				},
				error		: function (res) {
					if (console && console.log) {
						console.log('Error: ' + res.status + ' ' + res.statusText + res.responseText);
					}
				}
			});
		}
	},
	populateSelectOrder = function () {
		'use strict';
		var j;
		for (j = 0; j < user.orders.length; j += 1) {
			$('#order').append('<option>' + user.orders[j] + '</option>');
		}
	};
Number.prototype.formatMoney = function (c, d, t) {
	'use strict';
	var n = this,
		s = n < 0 ? "-" : "",
		i = parseInt(n = Math.abs(+n || 0).toFixed(c), 10) + '',
		j = i.length;
	if (isNaN(c = Math.abs(c))) {
		t = '.';
	}
	if (d === undefined) {
		d = ',';
	}
	if (t === undefined) {
		t = '.';
	}
	if (j > 3) {
		j = j % 3;
	} else {
		j = 0;
	}
	return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};		
$('#selectAction').change(function () {
	'use strict';
	ratesFunc.clearRate();
});
$('#selectCurrency1').change(function () {
	'use strict';
	ratesFunc.clearRate();
});
$('#selectCurrency2').change(function () {
	'use strict';
	$('#benCurrency').text($('#selectCurrency2 option:selected').text());
	$('#benCurrencyRem').text($('#selectCurrency2 option:selected').text());
	ratesFunc.clearRate();
});
$('#selectBeneficiary').change(function () {
	'use strict';
	var ffcString;
	benFunc.getBeneficiaries($('#selectBeneficiary option:selected').val());
	ffcString = '<option>' + $('#beneficiaryAccountNum option:selected').val() + ' FFC ' + $('#selectBeneficiary option:selected').val() + '</option><option>' + $('#beneficiaryAccountNum option:selected').val() + ' noFFC ' + $('#selectBeneficiary option:selected').val() + '</option>';
	$('#ffc').html(ffcString);
});
$('#beneficiaryAccountNum').change(function () {
	'use strict';
	var ffcString = '<option>' + $('#beneficiaryAccountNum option:selected').val() + ' FFC ' + $('#selectBeneficiary option:selected').val() + '</option><option>' + $('#beneficiaryAccountNum option:selected').val() + ' noFFC ' + $('#selectBeneficiary option:selected').val() + '</option>';
	$('#ffc').html(ffcString);
});
$('#btn_quote').click(function () {
	'use strict';
	console.log('You clicked QUOTE btn');
	var action = $('#selectAction option:selected').text(),
		currency1 = $('#selectCurrency1 option:selected').text(),
		currency2 = $('#selectCurrency2 option:selected').text();
	ratesFunc.clearRate();
	if ($('#amount1').val() !== '' && $('#amount1').val() !== '0.00' && $('#amount2').val() !== '' && $('#amount2').val() !== '0.00') {
		console.log('modal');
		$("#progressbar").hide();
		$("#progressnum").hide();
		$('#dialog-two-amounts').dialog('destroy');
		$('#dialog-two-amounts')
			.dialog({
				autoOpen	: false,
				title		: 'Error: amounts for both currencies',
				width		: 300,
				height		: 150,
				modal		: true
			});
		$('#dialog-two-amounts').dialog('open');
		$('#btnOK').click(function () {
			$('#amount1').val('');
			$('#amount2').val('');
			$('#dialog-two-amounts').dialog('close');
			$("#progressbar").hide();
			$("#progressnum").hide();
		});
		$("#progressbar").hide();
		$("#progressnum").hide();
	}
	ratesFunc.getRate(action, currency1, currency2);
	return false;
});

$('#btn_clear').click(function () {
	'use strict';
	console.log('btn Clear clicked');
	$('#amount1').val('');
	$('#amount2').val('');
	$("#progressbar").hide();
	$("#progressnum").hide();
	if ($('#btn_quote').attr('disabled') === 'disabled') {
		$('#btn_quote').removeAttr('disabled');
	}
});
$('#benCurrencyRem').text($('#selectCurrency2 option:selected').text());
$('#btn_info').click(function () {
	$('#dialog-info').dialog('destroy');
	$('#dialog-info')
		.dialog({
			autoOpen	: false,
			title		: 'Beneficiary and Bank Information',
			width		: 950,
			height		: 700,
			modal		: true
		});
	$('#dialog-info').dialog('open');
	$('#btnExitWindow').click(function () {
		$('#dialog-info').dialog('close');
	});
});