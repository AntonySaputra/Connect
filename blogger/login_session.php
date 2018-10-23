<?php
require_once 'database.php';
$username = filter_input(INPUT_POST, "username",FILTER_SANITIZE_STRING);

$query = "SELECT Avatar_image,User_id FROM user WHERE User_name = :username";
$statement = $db->prepare($query);
$statement->bindValue(':username',$username);
$statement->execute();
$user = $statement->fetch();
$statement->closeCursor();

session_start();
$_SESSION['log_on'] = true; 
$_SESSION['username'] = $username;
$_SESSION['avatar'] = $user['Avatar_image'];
$_SESSION['user_id']= $user['User_id'];
echo json_encode(true);

        