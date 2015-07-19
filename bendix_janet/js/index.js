/*global $: true, console: true, alert: true, clearInterval: true, clearTimeout: true, document: false, event: false, frames: false, history: false, Image: false, location: false, name: false, navigator: false, Option: false, parent: false, screen: false, setInterval: true, setTimeout: false, window: true, XMLHttpRequest: true */
var	newsFunc = {
		queryNews1		: function () {
			'use strict';
			setInterval(
				$.ajax({
					url			: 'json/news1.json',
					dataType	: 'json',
					success		: function (data) {
						var items = [];
						if (console && console.log) {
							console.log('Success!');
						}
						$.each(data, function (id, val) {
							items.push('<li>' + val.date + ' ' + '<a href="' + val.url + '">' + val.title + '</a>' + '</li>');
						});
						$('<ul/>', {
							"class"		: "my-new-list",
							"html"		: items.join('')
							//html: ('<li>' + data.items[i].date + ' ' + data.items[i].title + ' ' + data.items[i].article + ' ' + data.items[i].url + '</li>')
						})
							.appendTo('#news1_container');
					},
					error		: function (data) {
						if (console && console.log) {
							console.log('Error: ' + data.status + ' ' + data.statusText);
							console.log('Error:', data.responseText);
						}
					}
				}),
				5000
			);
		},
		queryNews2		: function () {
			'use strict';
			//setInterval(
			$.ajax({
				url			: 'json/news2.json',
				dataType	: 'json',
				success		: function (data) {
					var items = [];
					if (console && console.log) {
						console.log('Success!');
					}
					$.each(data, function (id, val) {
						items.push('<li>' + val.date + ' ' + '<a href="' + val.url + '">' + val.title + '</a>' + '</li>');
					});
					$('<ul/>', {
						"class"		: "my-new-list",
						"html"		: items.join('')
					})
						.appendTo('#news2_container');
				},
				error	   : function (data) {
					if (console && console.log) {
						console.log('Error: ' + data.status + ' ' + data.statusText);
						console.log('Error:', data.responseText);
					}
				}
			});//, 5000);
		}
	};
$('#target').change(function () {
	'use strict';
	if ($('#target option:selected').val() === 'Select Disbursement Type') {
		alert("Do something for option 'Select Disbursement Type'");
	}
	if ($('#target option:selected').val() === 'Spot Trade') {
		alert("Do something for option 'Spot Trade'");
	}
	if ($('#target option:selected').val() === 'Holding Balance') {
		alert("Do something for option 'Holding Balance'");
	}
});
$('#btn_quote').click(function () {
	'use strict';
	console.log('You clicked QUOTE tbn');
	var action = $('#selectAction option:selected').val(),
		currency1 = $('#selectCurrency1 option:selected').val(),
		currency2 = $('#selectCurrency2 option:selected').val();
	ratesFunc.clearRate();
	if ($('#sumInput').val() === '') {
		$("#progressbar").progressbar({"value" : 0});
	}
	ratesFunc.getQuote(action, currency1, currency2);
});
$('#selectAction').change(function () {
	'use strict';
	ratesFunc.clearRate();
	$('#selectAction').val($('#selectAction option:selected').val());
	$('#currencies').html($('#selectCurrency1 option:selected').val() + '/' + $('#selectCurrency2 option:selected').val());
});
$('#selectCurrency1').change(function () {
	'use strict';
	var currency1 = $('#selectCurrency1 option:selected').val();
	ratesFunc.clearRate();
	$('#selectAction').val($('#selectAction option:selected').val());
	//$('#currencies').html(currency1 + '/' + $('#selectCurrency2 option:selected').val());
});
$('#selectCurrency2').change(function () {
	'use strict';
	var currency2 = $('#selectCurrency2 option:selected').val();
	ratesFunc.clearRate();
	$('#selectAction').val($('#selectAction option:selected').val());
	//$('#currencies').html($('#selectCurrency1 option:selected').val() + '/' + currency2);
});
$('#selects').submit(function (e) {
	'use strict';
	return false;
});
window.onload = function () {
	'use strict';
	$('#selectAction').val(user.defaultAction);
	$('#selectCurrency1').val(user.defaultCurrency1);
	$('#selectCurrency2').val(user.defaultCurrency2);
	$("#progressbar").progressbar({"value" : 0});
	$('#btn_lockin').attr("disabled", "disabled");
	ratesFunc.getRate(user.defaultAction, user.defaultCurrency1, user.defaultCurrency2);
	newsFunc.queryNews1();
	newsFunc.queryNews2();
};