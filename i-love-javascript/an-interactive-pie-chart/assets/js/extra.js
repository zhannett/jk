/*
Just a few small code snippets to improve the usability of the example page
*/
$(function() {
    // JavaScript is enabled so we can remove the paragraph highlighting that it's off
    $('#no_js').remove();
    // insert an anchor around the first header to allow for show/hide of aside content
    $('h2.first').html('<a href="#">' + $('h2.first').text() + '</a>')
    .find('a').click(function() {
        $('#aside div').toggleClass('read');
        return false;
    });
});