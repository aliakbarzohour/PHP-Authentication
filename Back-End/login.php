<?php

require 'config/config.php';
// define User name 
$name = $_POST["name"];
// define Email 
$email = $_POST["email"];
// define password 
$password = $_POST["password"];
// define repassword 
$repassword = $_POST["repassword"];
// checking password for login 
$password = md5($password);
$query = "select id from tbl_users where email = ? and password = ?";
try{
 $statement = $db->prepare($query);
 // binding 
 $statement->bind_param("ss", $name, $email, $password);
 // executing data 
 $statement->execute();
 // couting users in database 
 $result = $statement->get_result();
    if($result->num_rows === 1){
        echo 'Verrry goood .'
    }
}catch (Exception $e){
 echo $e->getMessage();
};