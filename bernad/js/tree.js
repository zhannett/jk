function init_tree() {
	if (!$('ul.tree').length) {
		return;
	}
	if ($('#ul_photos').attr('class') === 'tree_expanded') {
		$('ul.tree a.tree_trigger').removeClass('tree_trigger_expanded');
	} else {
		$('ul.tree a.tree_trigger').addClass('tree_trigger_expanded');
	}
	$('ul.tree a.tree_trigger').live('click', function() {
		if ($('#ul_photos').is(':hidden')) {
			$(this).addClass('tree_trigger_expanded');
			$('#ul_photos').addClass('tree_expanded').show();
		} else {
			$(this).removeClass('tree_trigger_expanded');
			$('#ul_photos').removeClass('tree_expanded').hide();
		}
		this.blur();
		return false;
	});
	$('ul.tree_expanded').prev('a').addClass('tree_trigger_expanded');
}
$(init_tree);