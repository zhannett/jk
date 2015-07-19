JK.Behaviors.photogallery = function (container) {
    "use strict";
    function hideGalleries() {
        $('#gallery_cats').hide();
        $('#gallery_around_nyc').hide();
        $('#gallery_views_from_esb').hide();
        $('#gallery_wallstreet').hide();
        $('#gallery_trumptower').hide();
    }
    $(document).ready(function () {
        $('#to_gallery_cats').click(function () {
            hideGalleries();
            $('#gallery_cats').show();
        });
        $('#to_gallery_around_nyc').click(function () {
            hideGalleries();
            $('#gallery_around_nyc').show();
        });
        $('#to_gallery_views_from_esb').click(function () {
            hideGalleries();
            $('#gallery_views_from_esb').show();
        });
        $('#to_gallery_wallstreet').click(function () {
            hideGalleries();
            $('#gallery_wallstreet').show();
        });
        $('#to_gallery_trumptower').click(function () {
            hideGalleries();
            $('#gallery_trumptower').show();
        });
    });
};