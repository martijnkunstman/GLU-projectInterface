<?php
    //this script writes the value of the GET variable lightStatus to the file lightStatus.txt
    if (isset($_GET['lightStatus'])) {
        $file = fopen("lightStatus.txt", "w");
        fwrite($file, $_GET['lightStatus']);
        fclose($file);
    }
    echo('{}');
?>