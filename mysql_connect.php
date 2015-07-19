<?php
mysql_connect("camehr.com", "scottd", "f3rr1s") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("loyalty") or die(mysql_error());
echo "Connected to Database";
?>
