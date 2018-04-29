<?php
echo "<b>This page was served by container: </b>";
print $_SERVER["SERVER_ADDR"];
echo "<br />";
echo "<b>Passing through load balancer: </b>";
print $_SERVER["REMOTE_ADDR"];
echo "<br />";
echo "<b>Exiting through server: </b>";
print $_SERVER["HTTP_HOST"] . " " . $_SERVER["HTTP_X_FORWARDED_FOR"];
echo "<br />";
echo "<b>Date and Time: </b>";
$now = new DateTime();
print $now->format('Y-m-d H:i:s');
?>
