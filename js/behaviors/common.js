JK.Behaviors.common = function (container) {
    "use strict";
    // disable all links that point to "#"
    $('a[href="#"]').click(function (event) {
        event.preventDefault();
    });
};