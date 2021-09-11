<?php
    //this file reads the value of the file lightStatus.txt and returns it as a valid JSON using an echo
    echo '{"lightStatus":'.file_get_contents("lightStatus.txt")."}";
?>