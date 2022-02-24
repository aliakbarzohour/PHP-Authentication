<?php
session_start();
require 'config/config.php';

// define Email 
$email = $_POST["email"];
// define password 
$password = $_POST["password"];
// checking password for login 
$password = sha1($password);
$query = "select * from tbl_users where email = ? and password = ?";
try {
    $statement = $db->prepare($query);
    // binding 
    $statement->bind_param("ss", $email, $password);
    // executing data 
    $statement->execute();
    // couting users in database 
    $result = $statement->get_result();
    if ($result->num_rows === 1) {
        // define admin_id for database 
        $row = $result->fetch_assoc();
        $_SESSION["admin_id"] = $row["id"];
        $_SESSION["admin_name"] = $row["name"];
        $_SESSION["admin_email"] = $row["email"];
        // headering after successful login 
        header('location: done.php');
        // echo 'OK You LOGED IN ✅';
    } else {
        // header('Location: ../Front-End/login-page/index.html');
    }
} catch (Exception $e) {
    echo $e->getMessage();
};
