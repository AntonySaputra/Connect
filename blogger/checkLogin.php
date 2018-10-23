<?php

require_once ("database.php");
$valid;
$username = filter_input(INPUT_POST, "username",FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password",FILTER_SANITIZE_STRING);

$query = "SELECT * FROM user WHERE User_name = :username AND Password = :password";
$statement = $db->prepare($query);
$statement->bindValue(':username',$username);
$statement->bindValue(':password',$password);
$statement->execute();
$users = $statement->fetch();
$statement->closeCursor();


echo json_encode($users);

