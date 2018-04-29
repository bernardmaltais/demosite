<?php
Echo "<html>";
Echo "<title>HTML With PHP</title>";

echo "<style>
body, html {
    height: 100%;
    margin: 0;
}
.bg {
    /* The image used */
    background-image: url("day.jpg");
    /* Full height */
    height: 100%; 
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>";

Echo "<b>My Example</b>";
echo "<br />";
echo "<b>This page was served by container: </b>";
print $_SERVER["SERVER_ADDR"];
echo "<br />";
echo "<b>Passing through load balancer: </b>";
print $_SERVER["REMOTE_ADDR"];
echo "<br />";
echo "<b>Exiting through node: </b>";
print $_SERVER["HTTP_HOST"];
echo "<br />";
phpinfo();
?>
