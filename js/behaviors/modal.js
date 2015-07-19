JK.Behaviors.modal = function (container) {
	"use strict";
	//var container = $('a.modal');
	function init_modal() {
		if (!container.length) {
			return;
		}
		var $IE6 = typeof document.addEventListener !== 'function' && !window.XMLHttpRequest; // Detect IE6 (boolean).
		function sizeModal() {
			var $modal = $('#modal_window'),
			    $modal_width = $modal.outerWidth(),
			    $modal_height = $modal.outerHeight(),
			    $modal_top = '-' + Math.floor($modal_height / 2) + 'px',
			    $modal_left = '-' + Math.floor($modal_width / 2) + 'px';
			$('#modal_window')
			    .css('margin-top', $modal_top)
			    .css('margin-left', $modal_left);
		}
		/* For IE6. */
		function positionModal() {
			$('#modal_wrapper').css('top', $(document).scrollTop() + 'px'); // Force modal into place.
		}
		function showModal() {
			// Bleh.
			if ($IE6) {
				positionModal();
			}
			$('#modal_wrapper').show(); // Unveil the wrapper.
			sizeModal(); // Size it.
			$('#modal_window').css('visibility', 'visible').show(); // Reveal modal window.
			$('#modal_content img').each(function () { // Resize as images load.
				$(this).load(function () {
					$(this).removeClass('modal_placeholder').show();
					sizeModal();
				});
			});
		}
		// Insert modal at end of </body>.
		/*
		$('body').append('<div id="modal_wrapper"><!--[if IE 6]><iframe id="modal_iframe" frameborder="0"></iframe><![endif]--><div id="modal_overlay"></div><div id="modal_window"><div id="modal_bar"><strong>Modal window</strong><a href="#" id="modal_close">Close</a></div><div id="modal_content"></div></div>');
		*/
		$('body').append('<div id="modal_wrapper"><!--[if IE 6]><iframe id="modal_iframe" frameborder="0"></iframe><![endif]--><div id="modal_overlay"></div><div id="modal_window"><div id="modal_bar"><strong>Modal window</strong><a href="#" id="modal_close">Close</a></div><div id="modal_content"></div></div>');
		// Look for modal links.
		$('a.modal').click(function () {
			// Check the href="..."
			var $the_link = $(this).attr('href');
			// Determine link target.
			if ($the_link.match(/^#./)) {
				// Assume #anchor content.
				$('#modal_content').html($($(this).attr('href')).html());
				showModal();
			} else if ($the_link.match(/.jpg$/) || $the_link.match(/.png$/) || $the_link.match(/.gif$/)) {
				// Assume image content.
				$('#modal_content').html('<p id="modal_image_wrapper"><img src="' + $the_link + '" class="modal_placeholder" /></p>');
				showModal();
			} else {
				// Assume external Ajax content.
				$('#modal_content').load($(this).attr('href').replace('#', ' #'), '', showModal);
			}
			// Determine modal title.
			if ($(this).attr('title')) {
				// Insert title.
				('#modal_bar strong').html($(this).attr('title'));
			} else if ($(this).html() !== '') {
				// Insert link text.
				//$('#modal_bar strong').html($(this).html());
				$('#modal_bar').html('Image rotator with built-in video implemented with in HTML5 with fallback to Flash player if HTML5 video tag is not supported');
			}
			// Nofollow.
			this.blur();
			return false;
		});
		// Hide modal elements.
		$('#modal_overlay, #modal_close').click(function () {
			$('#modal_wrapper').hide();
			$('#modal_window').css('visibility', 'hidden'); // Hide, because images might load later.
			$('#modal_content img').each(function () { // Unbind image listeners.
				$(this).unbind();
			});
			$('#modal_content').html('');
			$('#modal_bar strong').html('Modal window'); // Reset modal title.
			// Nofollow.
			this.blur();
			return false;
		});
		// Listen for browser scroll, if IE6.
		if ($IE6) {
			$(window).scroll(function () {
				if ($('#modal_wrapper').is(':visible')) {
					positionModal();
				}
			});
		}
	}
	$(document).ready(function () {
		init_modal();
	});
};