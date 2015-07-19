$(document).ready(function() {
		$('#projects li:eq(13)').hide();
		$('#projects li:eq(17)').hide();
		$('#projects li:eq(18)').hide();
		$('#projects li:eq(19)').hide();
		$('#projects li:eq(20)').hide();
		$('div.more').click(function() {
				$('#projects li:eq(13)').show(1000);
				$('#projects li:eq(17)').show(1000);
				$('#projects li:eq(18)').show(1000);
				$('#projects li:eq(19)').show(1000);
				$('#projects li:eq(20)').show(1000);
				$(this).hide();
		});
 });