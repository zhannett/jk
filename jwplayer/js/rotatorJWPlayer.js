/* HOMEPAGE VIDEO SLIDER */
function initializeSlider() {
	'use strict';
	$('.slider').each(function () {
		var sl = $(this),
			slideWidth = sl.find('.slidercontent>.sliderelement').width(),
			currentElement = 0,
			numElements = sl.find('.slidercontent>.sliderelement').length,
			btn_left = sl.find('.controls_l'),
			btn_right = sl.find('.controls_r'),
			userInterrupt = false,
			tweenPeriod = 1000,
			delayTime = 5000,
			i = 0,
			resetLeft = function () {
				sl.children('.slidercontent').prepend(sl.find('.slidercontent>.sliderelement').last());
				sl.children('.slidercontent').css({'left': '0px'});
			},
			resetRight = function () {
				sl.children('.slidercontent').append(sl.find('.slidercontent>.sliderelement').first());
				sl.children('.slidercontent').css({'left': (-(numElem