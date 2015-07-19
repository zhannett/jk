JK.Behaviors.clock = function (container) {
    "use strict";
    function addEvent(elm, evType, fn, useCapture) {
        if (elm.addEventListener) {
            elm.addEventListener(evType, fn, useCapture);
            //return true;
        } else if (elm.attachEvent) {
            elm.attachEvent('on' + evType, fn);
            //return r;
        } else {
            elm['on' + evType] = fn;
        }
    }
    function update(container) {
        var d = new Date(),
            digits,
            readout = '';
        digits = d.getHours();
        readout += (digits > 9 ? '' : '0') + digits + ':';
        digits = d.getMinutes();
        readout += (digits > 9 ? '' : '0') + digits + ':';
        digits = d.getSeconds();
        readout += (digits > 9 ? '' : '0') + digits;
        clock.innerHTML = readout;
    }
    function init() {
        setInterval(function () {
            update(container);
        }, 1000);
    }
    addEvent(window, 'load', init, false);
};