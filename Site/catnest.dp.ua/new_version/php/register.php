<?php
require_once('mailfunction.php');
ini_set('display_errors', 1); error_reporting(E_ALL);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $surname=$_POST["surname"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $password=$_POST["password"];
    reg_mail($email,$name,$surname,$phone,$password);
    
}else{
    header("Location: https://catnest.dp.ua/new_version/pages/404.php");
    exit();
}
?>