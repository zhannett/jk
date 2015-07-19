JK.Behaviors.stickyNavigation = function (container) {
    "use strict";
    //var container = $('#topnav_wrapper');
    var sticky_navigation_offset_top = container.offset().top,
        xPos = ($('body').width() - $('#document').width()) / 2,
        sticky_navigation = function () {
            var scroll_top = $(window).scrollTop();
            if (scroll_top - sticky_navigation_offset_top > 0) {
                container.css({
                    "position" : "fixed",
                    "top" : 0
                });
            } else {
                container.css({
                    "position" : "static",
                    "width" : "1140px", //fix for Chrome
                    "margin": "0 auto" //fix for Chrome
                });
            }
        };
    sticky_navigation();
    $(document).ready(function () {
        $('topnav').left = xPos;
    })
    $(window).scroll(function () {
        sticky_navigation();
    });
};