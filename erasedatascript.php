<?php
    $data = "admin     | Welcome to the basic chat\n";
    $ret = file_put_contents('chat.txt', $data, LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
        header('Location: ' . $_SERVER["HTTP_REFERER"] );
        exit;
    }
?>
