JK.Behaviors.prettyPhotoInit = function (container) {
    "use strict";
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto({
            animationSpeed: 'slow',
            padding: 40, /* padding for each side of the picture */
            opacity: 0.70,
            showTitle: true,
            allowresize: true,
            counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
            theme: 'facebook', /* light_rounded / dark_rounded / light_square / dark_square / facebook / pp_default */
            callback: function () {}, /* Called when prettyPhoto is closed */
            slideshow: 5000, /* false OR interval time in ms */
            autoplay_slideshow: true,
            show_title: true,
            allow_resize: true, /* Resize the photos bigger than viewport. true/false */
            default_width: 500,
            default_height: 344,
            horizontal_padding: 20,
            hideflash: false,
            wmode: 'opaque', /* Set the flash wmode attribute */
            autoplay: true, /* Automatically start videos: True/False */
            modal: false, /* If set to true, only the close button will close the window */
            deeplinking: true, /* Allow prettyPhoto to update the url to enable deeplinking. */
            overlay_gallery: false, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
            keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
            changepicturecallback: function () { }, /* Called everytime an item is shown/changed */
            ie6_fallback: true,
            markup: '<div class="pp_pic_holder"> \
                            <div class="ppt">&nbsp;</div> \
                            <div class="pp_top"> \
                                    <div class="pp_left"></div> \
                                    <div class="pp_middle"></div> \
                                    <div class="pp_right"></div> \
                            </div> \
                            <div class="pp_content_container"> \
                                    <div class="pp_left"> \
                                    <div class="pp_right"> \
                                            <div class="pp_content"> \
                                                    <div class="pp_loaderIcon"></div> \
                                                    <div class="pp_fade"> \
                                                            <a href="#" class="pp_expand" title="Expand the image">Expand</a> \
                                                            <div class="pp_hoverContainer"> \
                                                                    <a class="pp_next" href="#">next</a> \
                                                                    <a class="pp_previous" href="#">previous</a> \
                                                            </div> \
                                                            <div id="pp_full_res"></div> \
                                                            <div class="pp_details"> \
                                                                    <div class="pp_nav"> \
                                                                            <a href="#" class="pp_arrow_previous">Previous</a> \
                                                                            <p class="currentTextHolder">0/0</p> \
                                                                            <a href="#" class="pp_arrow_next">Next</a> \
                                                                    </div> \
                                                                    <p class="pp_description"></p> \
                                                                    {pp_social} \
                                                                    <a class="pp_close" href="#">Close</a> \
                                                            </div> \
                                                    </div> \
                                            </div> \
                                    </div> \
                                    </div> \
                            </div> \
                            <div class="pp_bottom"> \
                                    <div class="pp_left"></div> \
                                    <div class="pp_middle"></div> \
                                    <div class="pp_right"></div> \
                            </div> \
                    </div> \
                    <div class="pp_overlay"></div>',
            gallery_markup: '<div class="pp_gallery"> \
                                            <a href="#" class="pp_arrow_previous">Previous</a> \
                                            <div> \
                                                    <ul> \
                                                            {gallery} \
                                                    </ul> \
                                            </div> \
                                            <a href="#" class="pp_arrow_next">Next</a> \
                                    </div>',
            image_markup: '<img id="fullResImage" src="{path}" />',
            inline_markup: '<div class="pp_inline">{content}</div>',
            custom_markup: ''
        });
    });
};