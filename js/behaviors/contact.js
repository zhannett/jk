JK.Behaviors.contact = function (container) {
    "use strict";
    $(document).ready(function () {
        $("#message").maxLength(250);
        $('input[type="text"]').blur(function () {
            var thisfield = this;
            $.getJSON("ajax_validate_get.php", {
                field: this.name,
                value: this.value
            },
                function (data) {
                    if (data === "") {
                        $(thisfield).siblings("span.error").empty();
                    } else {
                        $(thisfield).siblings("span.error").empty().append(data);
                    }
                });
        });
        $("textarea").blur(function () {
            var thisfield = this;
            $.getJSON("ajax_validate_get.php", {
                field: this.name,
                value: this.value
            },
                  function (data) {
                    if (data === "") {
                        $(thisfield).siblings("span.error").empty();
                    } else {
                        $(thisfield).siblings("span.error").empty().append(data);
                    }
                });
        });
    });
};