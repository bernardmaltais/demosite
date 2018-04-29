<?php
if(isset($_POST['field1'])) {
    $data = $_POST['field1'] . "<br />";
    $ret = file_put_contents('mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
        header('Location: ' . $_SERVER["HTTP_REFERER"] );
        exit;
    }
}
else {
   die('no post data to process');
}
?>
