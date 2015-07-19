jQuery.fn.maxLength = function (max) {
    "use strict";
    this.each(function () {
        var type = this.tagName.toLowerCase(),
            inputType = this.type ? this.type.toLowerCase() : null;
        //Check if is a input type=text OR type=password
        if (type === "input" && (inputType === "text" || inputType === "password")) {
            this.maxLength = max;
        } else if (type === "textarea") {
            this.onkeypress = function (e) {
                var ob = e || event, //Get the event object (for IE)
                    keyCode = ob.keyCode, //Get the code of key pressed
                    hasSelection = document.selection ? document.selection.createRange().text.length > 0 : this.selectionStart !== this.selectionEnd;  //Check if it has a selected text
                return !(this.value.length >= max && (keyCode > 50 || keyCode === 32 || keyCode === 0 || keyCode === 13) && !ob.ctrlKey && !ob.altKey && !hasSelection);  //return false if can't write more  
            };
            this.onkeyup = function () {
                if (this.value.length > max) {
                    this.value = this.value.substring(0, max);
                }
            };
        }
    });
};
