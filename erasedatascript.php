<?php
    $data = "";
    $ret = file_put_contents('mydata.txt', $data, LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
        header('Location: ' . $_SERVER["HTTP_REFERER"] );
        exit;
    }
?>
