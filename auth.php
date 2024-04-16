<?php
session_start();

require 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

$sql = "select * from account where id = '$username' and password = '$password'";
$query = mysqli_query($connection, $sql);
$result = mysqli_fetch_assoc($query);

if (null !== $result) {
    $_SESSION["loggedin"] = true;
    $_SESSION["name"] = $result["name"];
    $_SESSION["id"] = $result["id"];
    $_SESSION["password"] = $result["password"];
    $_SESSION["point"] = $result["point"];
    header('location:index.php');
    exit;
} else {
    login_fail('帳號或密碼錯誤');
}

function login_fail($message)
{
    echo "<script>alert('$message');window.location.href='login.php';</script>";
    return false;
}
