JK.Behaviors.colorLinks = function (container) {
    "use strict";
    $(document).ready(function () {
        $('#main_content a:not(.certimg)').filter(function () {
            return this.hostname && this.hostname !== location.hostname;
        }).addClass("external");
        $("#links li>a").removeClass("external");
        $("ul.gallery a").removeClass("external");
        $("a[href^=mailto:]").addClass("mailto");
        $("a[href$=.pdf]").addClass("pdflink");
        $("a[href*=www.janetkulyk.com]").addClass("mysite");
    });
};