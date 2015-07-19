/*global $: true, console: true, alert: true, clearInterval: true, clearTimeout: true, document: false, event: false, frames: false, history: false, Image: false, location: false, name: false, navigator: false, Option: false, parent: false, screen: false, setInterval: true, setTimeout: false, window: true, XMLHttpRequest: true */
var k = 0,
	grandTotal = 0,
	grandTotalCur2 = 0,
	remAmount,
	edit = false,
	editNum = 0,
	bpmdata = [];
function renumber() {
	'use strict';
	var j, x;
	for (j = 1; j < $('.new_record').length; j += 1) {
		$('.li_line')[j].innerHTML = j;
		if (j % 2 === 0) {
			$('.li_line')[j].parentNode.style.background = '#fff';
			for (x = 0; x < $('.li_line')[j].parentNode.childNodes.length; x += 1) {
				$('.li_line')[j].parentNode.childNodes[x].style.background = '#fff';
			}
		} else {
			$('.li_line')[j].parentNode.style.background = '#a5a5a5';
			for (x = 0; x < $('.li_line')[j].parentNode.childNodes.length; x += 1) {
				$('.li_line')[j].parentNode.childNodes[x].style.background = '#a5a5a5';
			}
		}
	}
}
function calculateGrandTotal() {
	'use strict';
	var j,
		max1,
		grandTotal = 0,
		grandTotalCur2 = 0,
		benAmountRem = 0,
		strGrandTotal = '',
		strGrandTotalCur2 = '',
		strBenAmountRem = '',
		strGrandTotalCur2 = '';
	for (j = 1, max1 = $('.new_record').length; j < max1; j += 1) {
		grandTotal += parseFloat($('.li_total')[j].innerHTML.replace(/,/g, ''));
		benAmountRem = parseFloat($('#remainingBalance').text().replace(/,/g, '')) - grandTotal;
		grandTotalCur2 = parseFloat($('.li_fee')[j].innerHTML.replace(/,/g, ''));
		strGrandTotal = grandTotal.formatMoney(2, '.', ',');
		strBenAmountRem = benAmountRem.formatMoney(2, '.', ',');
	}
	console.log(grandTotal);
	$('#grandtotal').text(strGrandTotal);
	$('#benAmountRem').text(strBenAmountRem);
}
if (edit === false) {
	$('#btnSaveEdited').hide();
	$('#btnAddLine').show();
} else {
	$('#btnAddLine').hide();
	$('#btnSaveEdited').show();
}
$('#btnAddLine').click(function () {
	'use strict';
	var now = new Date(),
		amount2 = parseFloat($('#remainingBalance').text().replace(/,/g, '')),
		benAmount = parseFloat($('#benAmount').val().replace(/,/g, '')),
		fee = 300,
		total = benAmount,  /* + something ???    */
		records = $('.new_record').length + 1,
		strGrandTotal,
		strRemAmount,
		newRecord = [];
	k += 1;
	console.log('btnAddLine clicked' + k + 'times');
	grandTotal = parseFloat(grandTotal + total);
	console.log('grandtotal = ' + grandTotal);
	remAmount = parseFloat(amount2 - grandTotal);
	console.log('remAmount = ' + remAmount);
	strGrandTotal = grandTotal.formatMoney(2, '.', ',');
	console.log('strGrandTotal = ' + strGrandTotal);
	strRemAmount = remAmount.formatMoney(2, '.', ',');
	console.log('strRemAmount = ' + strRemAmount);
	$('#grandtotal').text(strGrandTotal);
	$('#benAmountRem').text(strRemAmount);
	$('#grandtotalCur2').text($('#currency').text());
	newRecord.amount1 = parseFloat($('#amount1').val());
	newRecord.amount2 = parseFloat($('#amount2').val());
	newRecord.benAmount = benAmount;
	newRecord.fee = 300;
	newRecord.total = parseFloat($('#amount2').val());
	var $newRecord = $('<ul></ul>')
				.attr('id', k)
				.addClass('new_record')
				.prependTo($('#helper'))
				.show();
	$('<li></li>')
		.addClass('li_line')
		.appendTo($newRecord);
	$('<li></li>')
		.addClass('li_ref')
		.appendTo($newRecord)
		.text('DD0001-' + k);
	$('<li></li>')
		.addClass('li_date')
		.appendTo($newRecord)
		.text(now.getDate() + '/' + (now.getMonth() + 1) + '/' + now.getFullYear());
		/*
	$('<li></li>')
		.addClass('li_action')
		.appendTo($newRecord)
		.text($('#selectAction option:selected').text());
		*/
	$('<li></li>')
		.addClass('li_benAmount')
		.appendTo($newRecord)
		.text(benAmount.formatMoney(2, '.', ','));
	$('<li></li>')
		.addClass('li_currency2')
		.appendTo($newRecord)
		.text($('#benCurrency').text());
	$('<li></li>')
		.addClass('li_benProduct')
		.appendTo($newRecord)
		.text($('#benProduct').val());
	$('<li></li>')
		.addClass('li_beneficiary')
		.appendTo($newRecord)
		.text($('#selectBeneficiary option:selected').val());
	$('<li></li>')
		.addClass('li_rate')
		.appendTo($newRecord)
		.text($('#rate').text());
	$('<li></li>')
		.addClass('li_amount1')
		.appendTo($newRecord)
		//.text(amount1.formatMoney(2, '.', ','));
		.html('&nbsp;');
	$('<li></li>')
		.addClass('li_currency1')
		.appendTo($newRecord)
		//.text($('#selectCurrency1 option:selected').text());
		.html('&nbsp;');
	$('<li></li>')
		.addClass('li_fee')
		.appendTo($newRecord)
		.text(fee.formatMoney(2, '.', ','));
	$('<li></li>')
		.addClass('li_total')
		.appendTo($newRecord)
		.text(total.formatMoney(2, '.', ','));
	$('<li></li>')
		.addClass('li_amend')
		.attr('id', 'li_amend_' + k)
		.appendTo($newRecord)
		.html('A')
		.css('cursor', 'pointer')
		.click(function () {
			var $that = this;
			this.parentNode.style.color = 'green';
			edit = true;
			if (edit === true) {
				//$('.li_amend').text('');
				//$('.li_info').text('');
				//$('.li_delete').text('');
			}
			$('#beneficiary').css('background', '#c0dff9');
			$('#btnAddLine').hide();
			$('#lbl_benCurrencyRem').hide();
			$('#span_benCurrencyRem').hide();
			$('#span_benAmountRem').hide();
			$('#benAmount').val($(this).parent().find($('.li_benAmount')).text());
			$('#benProduct option:selected').text($(this).parent().find($('.li_benProduct')).text());
			$('#selectBeneficiary option:selected').text($(this).parent().find($('.li_beneficiary')).text());
			$('#beneficiaryAccountNum option:selected').text($(this).parent().find($('.li_beneficiaryAccountNum')).text());
			$('#ffc option:selected').text($(this).parent().find($('.li_ffc')).text());
			$('#savedBenNotes').val($(this).parent().find($('.li_savedBenNotes')).text());
			$('#newBenNotes').val($(this).parent().find($('.li_newBenNotes')).text());
			$('#notesForBendix').val($(this).parent().find($('.li_notesForBendix')).text());
			$('#btnSaveEdited')
				.show()
				.click(function () {
					edit = false;
					if (edit === false) {
						$('.li_amend').text('A');
						$('.li_info').text('I');
						$('.li_delete').text('X');
					}
					editNum += 1;
					$('#beneficiary').css('background', '#e2e2e2');
					$('#btnSaveEdited').hide();
					$('#btnAddLine').show();
					$('#lbl_benCurrencyRem').show();
					$('#span_benCurrencyRem').show();
					$('#span_benAmountRem').show();
					($that).parentNode.style.color = '#c00';
					var id = $that.getAttribute('id');
					//alert('length = ' + $('.edited').length);
					//alert(editNum);
					if (editNum === 1 || editNum === 3 || editNum === 6 || editNum === 10 || editNum === 15 || editNum === 21 || editNum === 28 || editNum === 36 || editNum === 45 || editNum === 55) {
						($that).parentNode.childNodes[3].innerHTML = $('#benAmount').val();
						($that).parentNode.childNodes[5].innerHTML = $('#benProduct option:selected').val();
						($that).parentNode.childNodes[6].innerHTML = $('#selectBeneficiary option:selected').val();
						($that).parentNode.childNodes[11].innerHTML = ($that).parentNode.childNodes[3].innerHTML;
						($that).parentNode.childNodes[15].innerHTML = $('#beneficiaryAccountNum option:selected').val(); //beneficiaryAccountNum
						($that).parentNode.childNodes[16].innerHTML = $('#ffc option:selected').val(); //ffc
						($that).parentNode.childNodes[18].innerHTML = $('#newBenNotes').val(); //newBenNotes
						($that).parentNode.childNodes[19].innerHTML = $('#notesForBendix').val(); //notesForBendix
						calculateGrandTotal();
					}
				});
		});
	$('<li></li>')
		.addClass('li_info')
		.appendTo($newRecord)
		.html('I')
		.css('cursor', 'pointer')
		.click(function () {
			$('#dialog-info').dialog('destroy');
			$('#dialog-info')
				.dialog({
					autoOpen	: false,
					title		: 'Beneficiary and Bank Information',
					width		: 950,
					height		: 600,
					modal		: true
				});
			$('#dialog-info').dialog('open');
			$('#btnExitWindow').click(function () {
				$('#dialog-info').dialog('close');
			});
		});
	$('<li></li>')
		.addClass('li_delete')
		.appendTo($newRecord)
		.html('X')
		.css('cursor', 'pointer')
		.click(function () {
			var that = this,
			thetotal;
			thetotal = parseFloat((this.parentNode.childNodes[11].innerHTML).replace(/,/g, ''));
			console.log('thetotal = ' + thetotal);
			console.log('Btn Delete has been clicked');
			$('#dialog-remove').dialog('destroy');
			$('#dialog-remove')
				.dialog({
					autoOpen	: false,
					title		: 'Remove record?',
					width		: 300,
					height		: 150,
					modal		: true
				});
			$('#dialog-remove').dialog('open');
			$('#btnRemoveRecord').click(function () {
				$(that).parent().remove();
				renumber();
				calculateGrandTotal();
				$('#dialog-remove').dialog('close');
			});
			$('#btnCancel').click(function () {
				$('#dialog-remove').dialog('close');
			});
		});
	$('<li></li>')
		.addClass('li_beneficiaryAccountNum')
		.appendTo($newRecord)
		.text($('#beneficiaryAccountNum option:selected').val())
		.hide();
	$('<li></li>')
		.addClass('li_ffc')
		.appendTo($newRecord)
		.text($('#ffc option:selected').val())
		.hide();
	$('<li></li>')
		.addClass('li_savedBenNotes')
		.appendTo($newRecord)
		.text($('#savedBenNotes').val())
		.hide();
	$('<li></li>')
		.addClass('li_newBenNotes')
		.appendTo($newRecord)
		.text($('#newBenNotes').val())
		.hide();
	$('<li></li>')
		.addClass('li_notesForBendix')
		.appendTo($newRecord)
		.text($('#notesForBendix').val())
		.hide();
	console.log($('#order_grand_total').html());
	renumber();
	return false;
/*
	$.ajax({
		url			: 'postBeneficiaries.php',
		type		: 'post',
		data		:  {
			"beneficiary"	: $('#selectBeneficiary').val(),
			"refNum"		: $('#order').val(),
			"dateTimeStamp"	: 'new Date()',
			"action"		: $('#savedAction').val(),
			"amount1"		: $('#savedAmount1').val(),
			"currency1"		: $('#savedCurrency1').val(),
			"product"		: "",
			"rate"			: "",
			"amount2"		: "",
			"currency2"		: $('#savedCurrency2').val(),
			"fee"			: "",
			"total"			: ""
		},
		dataType	: 'text',
		success		: function () {
			if (console && console.log) {
				console.log('Success POST DATA!');
			}
			//$('#savedBenNotes').text(res);
		},
		error		: function (res) {
			if (console && console.log) {
				console.log('Error: ' + res.status + ' ' + res.statusText + res.responseText);
			}
		}
	});
	*/
/*****************************************************/
});
$('#btnSaveOrder').click(function () {
	'use strict';
	for (k = 1; 0 < $('.new_record').length - 1; k += 1) {
		bpmdata[k - 1] = {
			"line"			: $('.new_record')[k].childNodes[0].innerHTML,
			"ref"			:  $('.new_record')[k].childNodes[1].innerHTML,
			"date"			:  $('.new_record')[k].childNodes[2].innerHTML,
			"amount2"		:  $('.new_record')[k].childNodes[3].innerHTML,
			"currency2"		:  $('.new_record')[k].childNodes[4].innerHTML,
			"product"		:  $('.new_record')[k].childNodes[5].innerHTML,
			"beneficiary"	:  $('.new_record')[k].childNodes[6].innerHTML,
			"rate"			:  $('.new_record')[k].childNodes[7].innerHTML,
			"amount1"		:  $('.new_record')[k].childNodes[8].innerHTML,
			"currency1"		:  $('.new_record')[k].childNodes[9].innerHTML,
			"fee"			:  $('.new_record')[k].childNodes[10].innerHTML,
			"total"			:  $('.new_record')[k].childNodes[11].innerHTML,
			"benAccount"	:  $('.new_record')[k].childNodes[15].innerHTML,
			"ffc"			:  $('.new_record')[k].childNodes[16].innerHTML,
			"oldNotes"		:  $('.new_record')[k].childNodes[17].innerHTML,
			"newNotes"		:  $('.new_record')[k].childNodes[18].innerHTML,
			"notesToBendix"	:  $('.new_record')[k].childNodes[19].innerHTML
		};
		//alert(bpmdata[k-1]);
		bpmdata.push(bpmdata[k - 1]);
	}
	console.log(bpmdata);
});