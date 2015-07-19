JK.Behaviors.dropdown = function () {
	"use strict";
	function init_dropdown() {
		if (!$('ul.dropdown').length) {
			return;
		}
		// Add listener for hover.
		$('ul.dropdown li.dropdown_trigger').hover(function () {
			// Show subsequent <ul>.
			$(this).find('ul').fadeIn(1);
		},
			function () {
				// Hide subsequent <ul>.
				$(this).find('ul').hide();
			});
	}
	$(document).ready(function () {
		init_dropdown();
	});
}();