<?php
$test = getimagesize("/home/hiddende/public_html/ZHANNA/NewSite/images/photo/halloween/IMG_0535.JPG");
$w = $test[0];
$h = $test[1];
echo $w . "     " . $h;
?>