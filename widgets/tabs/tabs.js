// Initialize.
function init_tabs() {
	if (!$('.tabs').length) {
		return;
	}
	// Reveal initial content area(s).
	$('.tab_content_wrap').each(function() {
		$(this).find('.tab_content:first').show();
	});
	
	// Listen for click on tabs.
	$('.tabs a').click(function() {
		if (!$(this).hasClass('current')) {
			$(this)	
				.addClass('current')
				.parent('li')
				.siblings('li').find('a.current')
				.removeClass('current');
			$($(this)
				.attr('href'))
				.show()
				.siblings('.tab_content')
				.hide();
		}
		this.blur();
		return false;
	});
}
// Kick things off.
$(function () {
	init_tabs();
});