$(document).ready(function () {
    "use strict";
   /*
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
    });*/
});
