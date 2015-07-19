function init_accordion() {
	"use strict";
	if (!$('dl.accordion').length) {
		return;
	}
	$('dl.accordion').each(function () {
		$(this).find('dt:first a').addClass('accordion_expanded').end().find('dd:first').show(); // Reveal first accordion item.

		// Added to round corners via CSS.
		$(this).find('dt:last').addClass('last');
	});

	$('dl.accordion dt a').click(function () {
		var $dl = $(this).parents('dl:first'),
		    $dd = $(this).parent('dt').next('dd');
		function findLast() {
			if ($dl.find('dd:last').is(':hidden')) {
				$dl.find('dt:last').addClass('last');
			}
		}
		if ($dd.is(':hidden')) {
			$dd.slideDown('fast').siblings('dd:visible').slideUp('fast', findLast);
			$(this).addClass('accordion_expanded').parent('dt').removeClass('last').siblings('dt').find('a').removeClass('accordion_expanded');
		}
		// Nofollow.
		this.blur();
		return false;
	});
}
$(document).ready(function () {
	"use strict";
	init_accordion();
});function addEvent(elm, evType, fn, useCapture) {
    "use strict";
    if (elm.addEventListener) {
        elm.addEventListener(evType, fn, useCapture);
        //return true;
    } else if (elm.attachEvent) {
        elm.attachEvent('on' + evType, fn);
        //var r = elm.attachEvent('on' + evType, fn);
        //return r;
    } else {
        elm['on' + evType] = fn;
    }
}
function update(clock) {
    "use strict";
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
    "use strict";
    if (!document.getElementById) {
        return;
    }
    var clock = document.getElementById('clock');
    if (!clock.innerHTML) {
        return;
    }
    setInterval(function () {
        update(clock);
    }, 1000);
}
addEvent(window, 'load', init, false);

function init_dropdown() {
	"use strict";
	if (!$('ul.dropdown').length) {
		return;
	}
	// Add listener for hover.
	$('ul.dropdown li.dropdown_trigger').hover(function () {
		// Show subsequent <ul>.
		$(this).find('ul').fadeIn(1);
	},
		function () {
			// Hide subsequent <ul>.
			$(this).find('ul').hide();
		});
}
$(document).ready(function () {
	"use strict";
	init_dropdown();
});jQuery.fn.maxLength = function (max) {
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
$('#newwin').mousedown(function () {
    "use strict";
    if (!$(this).is(':checked')) {
        $('.accordion li a').attr('target', '_blank');
    } else {
        $('li a').attr('target', '_self');
    }
});$(document).ready(function () {
    "use strict";
    var $resizable = $("div.resizable"),
        defaultSize = $resizable.css("fontSize"),
        unit = "%";
    $("#main_content a:not(.certimg)").filter(function () {
        return this.hostname && this.hostname !== location.hostname;
    }).addClass("external");
    $("#links li>a").removeClass("external");
    $("ul.gallery a").removeClass("external");
    $("#forum_main a").removeClass("external");
    $("a[href^=mailto:]").addClass("mailto");
    $("a[href$=.pdf]").addClass("pdflink");
    $("a[href*=www.janetkulyk.com]").addClass("mysite");
    $("#switcher button").click(function () {
        var num = parseFloat($resizable.css("fontSize"), 10);
        switch (this.id) {
        case "switcher_large":
            num *= 1.05;
            break;
        case "switcher_small":
            num /= 1.05;
            break;
        default:
            num = parseFloat(defaultSize, 10);
        }
        $resizable.animate({
            fontSize: num + unit
        }, "slow");
    });
    $("#news-feed").each(function () {
        var $container = $(this),
            fadeHeight = $container.height() / 4,
            yPos = 0,
            $loadingIndicator;
        $container.empty();
        for (yPos = 0; yPos < fadeHeight; yPos += 2) {
            $("<div></div>").css({
                opacity: yPos / fadeHeight,
                top: $container.height() - fadeHeight + yPos
            })
                .addClass("fade-slice")
                .appendTo($container);
        }
        $loadingIndicator = $("<img/>").attr({
            src: "img/loading.gif",
            alt: "Loading. Please wait."
        }).addClass("news-wait").appendTo($container);
        $.get("news/feed.php", function (data) {
            var currentHeadline = 0,
                oldHeadline = 0,
                hiddenPosition = $container.height() + 10,
                headlineCount,
                pause,
                rotateInProgress = false,
                headlineRotate;
            $loadingIndicator.remove();
            $("rss item", data).each(function () {
                var $link = $("<a></a>").attr("href", $("link", this).text()).text($("title", this).text()),
                    $headline = $("<h4></h4>").append($link),
                    pubDate = new Date($("pubDate", this).text()),
                    pubMonth = pubDate.getMonth() + 1,
                    pubDay = pubDate.getDate(),
                    pubYear = pubDate.getFullYear(),
                    $publication = $("<div></div>").addClass("publication-date").text(pubMonth + "/" + pubDay + "/" + pubYear),
                    $summary = $("<div></div>").addClass("summary").html($("description", this).text());
                $("<div></div>").addClass("headline").append($headline).append($publication).append($summary).appendTo($container);
            });
            $("div.headline").eq(currentHeadline).css("top", 0);
            headlineCount = $("div.headline").length;
            headlineRotate = function () {
                if (!rotateInProgress) {
                    rotateInProgress = true;
                    pause = false;
                    currentHeadline = (oldHeadline + 1) % headlineCount;
                    $("div.headline").eq(oldHeadline).animate({
                        top: -hiddenPosition
                    }, "slow", function () {
                        $(this).css("top", hiddenPosition);
                    });
                    $("div.headline").eq(currentHeadline).animate({
                        top: 0
                    }, "slow", function () {
                        rotateInProgress = false;
                        if (!pause) {
                            pause = setTimeout(headlineRotate, 5000);
                        }
                    });
                    oldHeadline = currentHeadline;
                }
            };
            if (!pause) {
                pause = setTimeout(headlineRotate, 5000);
            }
            $container.hover(function () {
                clearTimeout(pause);
                pause = false;
            }, function () {
                if (!pause) {
                    pause = setTimeout(headlineRotate, 250);
                }
            });
        });
    });
});
