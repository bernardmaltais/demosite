<?php
Echo "<html>";
Echo "<title>HTML With PHP</title>";
Echo "<b>My Example</b>";
echo "<br />";
echo "<b>This page was served from container: </b>";
print $_SERVER["REMOTE_ADDR"];
echo "<br />";
print $_SERVER["HTTP_X_FORWARDED_FOR"];
echo "<br />";
Print "<i>Print works too!</i>";
?>
