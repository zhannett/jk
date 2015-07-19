JK.Behaviors.smartLinks = function (container) {
    "use strict";
    $(document).ready(function () {
        var $links = $('.main_content').find('a'),
            $checkbox = $('.main_content').find('input');
        $checkbox.prop('checked', false);
        $links.filter(function () {
            return this.hostname && this.hostname !== location.hostname;
        }).addClass('external');
        $('ul.gallery a').removeClass('external');
        $('a[href^="mailto:"]').addClass('mailto');
        $('a[href$=".pdf"]').addClass('pdflink');
        $('a[href*="www.janetkulyk.com"]').addClass('mysite');
        $checkbox.change(function () {
            if ($checkbox.prop('checked') === true) {
                $links.attr('target', '_blank');
            } else {
                $links.attr('target', '_self');
            }
        });
    });
};


