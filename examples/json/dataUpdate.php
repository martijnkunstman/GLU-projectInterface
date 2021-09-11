<?php

$pointer = fopen('data.json', 'r');
if(flock($pointer, LOCK_SH)){ // will block execution until the write lock is released
    $content = fread($pointer, filesize('data.json')); // will return the correct content
    clearstatcache('data.json'); // clear the file cache for the next function
    $size = filesize('data.json'); // will return the correct size
}
fclose($pointer);
$array = json_decode($content, true);

if (!$array || $content=="")
{    
    $array = json_decode('{"direction":"none","name":"empty"}', true);
}

if (isset($_GET['direction']))
{
    $array["direction"] = $_GET['direction'];
}

if (isset($_GET['name']))
{
    $array["name"] = $_GET['name'];
}

$result = file_put_contents("data.json", json_encode($array), LOCK_EX);

?>