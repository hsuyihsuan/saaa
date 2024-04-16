<?php
$host = "us-cdbr-east-05.cleardb.net";
$user = "bb1940b5ebd1ce";
$password = '56b6f49b';
$db_name = "heroku_fcd2183d6d3bf15";

$connection = new mysqli($host, $user, $password, $db_name);
$connection->set_charset("utf8");
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}
$pdo_conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8mb4", $user, $password);