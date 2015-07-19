JK.Behaviors.linksInNewWindow = function (container) {
    "use strict";
    var $checkbox = container.find('input').prop('checked', false);
    $checkbox.change(function () {
        if (container.find('input').prop('checked') === true) {
            $('#portfolio li a').attr('target', '_blank');
            $('#institutions li a').attr('target', '_blank');
            $('.accordion li a').attr('target', '_blank');
        } else {
            $('#portfolio li a').attr('target', '_self');
            $('#institutions li a').attr('target', '_self');
            $('.accordion li a').attr('target', '_self');
        }
    });
};
