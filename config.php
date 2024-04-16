<?php
define('DB_SERVER', 'us-cdbr-east-05.cleardb.net');
define('DB_USERNAME', 'bb1940b5ebd1ce');
define('DB_PASSWORD', '56b6f49b');
define('DB_NAME', 'heroku_fcd2183d6d3bf15');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_query($link, 'SET NAMES utf8');

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    return $link;
}
?>