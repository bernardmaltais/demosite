<?php
Echo "<html>";
Echo "<title>HTML With PHP</title>";
Echo "<b>My Example</b>";
echo "<br />";
echo "<b>This page was served by container: </b>";
print $_SERVER["REMOTE_ADDR"];
echo "<br />";

phpinfo();
?>
