<?php
include('top.html');
echo "<b>This page was served by container: </b>";
print $_SERVER["SERVER_ADDR"];
echo "<br />";
echo "<b>Passing through load balancer: </b>";
print $_SERVER["REMOTE_ADDR"];
echo "<br />";
echo "<b>Exiting through node: </b>";
print $_SERVER["HTTP_HOST"];
echo "<br />";
include('bottom.html');
echo file_get_contents("mydata.txt");
?>
