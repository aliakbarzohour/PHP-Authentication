<?php
$db = new mysqli("localhost", "root", "", "authentication");

$db->set_charset("utf8");

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];

if($password === $repassword){
    echo 'password is ok .';
}else{
    echo 'passwod not match';
}