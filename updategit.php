<?php
function execPrint($command) {
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        print($line . "\n");
    }
}
// Print the exec output inside of a pre element

print("<pre>" . execPrint("git reset --hard HEAD") . "</pre>");
print("<pre>" . execPrint("git pull") . "</pre>");
header('Location: ' . $_SERVER["HTTP_REFERER"] );
        exit;
?>