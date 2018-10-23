<?php
require_once ("database.php");
include ("function.php");
$username = filter_input(INPUT_POST, "username",FILTER_SANITIZE_STRING);
$email_address = filter_input(INPUT_POST, "email_address",FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING);
$image = imageUpload("avatar","avatar");

$query = "INSERT INTO user
        (User_name,Password,Email_add,Avatar_image)
         VALUES(:User_name,:Password,:Email_add,:Avatar_image)";
$statement = $db->prepare($query);
$statement->bindValue(":User_name",$username);
$statement->bindValue(":Password",$password);
$statement->bindValue(":Email_add",$email_address);
$statement->bindValue(":Avatar_image",$image);
$statement->execute();
$statement->closeCursor();

$query1 = "SELECT Avatar_image,User_id FROM user WHERE User_name = :username";
$statement1 = $db->prepare($query1);
$statement1->bindValue(':username',$username);
$statement1->execute();
$user = $statement1->fetch();
$statement1->closeCursor();


session_start();
$_SESSION['log_on'] = true; 
$_SESSION['username'] = $username;
$_SESSION['avatar'] = $user['Avatar_image'];
$_SESSION['user_id']= $user['User_id'];

print_r($_SESSION);
header("location: index.php");