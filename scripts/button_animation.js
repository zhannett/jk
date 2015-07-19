$(document).ready(function() {
		$('div.label').click(function() {
				$('div.button').animate({left: 650, height: 12}, 1000);
				$('div.label').fadeOut(1000);
		});
 });