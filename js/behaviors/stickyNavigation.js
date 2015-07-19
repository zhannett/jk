JK.Behaviors.stickyNavigation = function (container) {
    "use strict";
    //var container = $('#top-navigation'),
    var sticky_navigation_offset_top = container.offset().top,
        sticky_navigation = function () {
            var scroll_top = $(window).scrollTop(), xPos = ($('body').width() - $('#document').width()) / 2;
            if (scroll_top - sticky_navigation_offset_top > 0) {
                container.css({"position" : "fixed", "top" : 0, "left" : xPos });
            } else {
                container.css({"position" : "relative", "top" : 0, "left" : 0});
            }
        };
    sticky_navigation();
    $(window).scroll(function () {
        sticky_navigation();
    });
};