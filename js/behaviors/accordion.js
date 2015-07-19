JK.Behaviors.accordion = function (container) {
	"use strict";
	//var container = $('dl.accordion');
	function init_accordion() {
		if (!container.length) {
			return;
		}
		container.each(function () {
			$(this).find('dt:first a').addClass('accordion_expanded').end().find('dd:first').show(); // Reveal first accordion item.
			$(this).find('dt:last').addClass('last'); // Added to round corners via CSS.
		});
		$('dl.accordion dt a').click(function () {
			var $dl = $(this).parents('dl:first'),
			    $dd = $(this).parent('dt').next('dd');
			function findLast() {
				if ($dl.find('dd:last').is(':hidden')) {
					$dl.find('dt:last').addClass('last');
				}
			}
			if ($dd.is(':hidden')) {
				$dd.slideDown('fast').siblings('dd:visible').slideUp('fast', findLast);
				$(this).addClass('accordion_expanded').parent('dt').removeClass('last').siblings('dt').find('a').removeClass('accordion_expanded');
			}
			// Nofollow.
			this.blur();
			return false;
		});
	}
	$(document).ready(function () {
		init_accordion();
	});
};