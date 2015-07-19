<?php 
  header('Content-Type: text/xml');
  print $feed = file_get_contents('http://www.sitepoint.com/blogs/category/news/feed/');
?>