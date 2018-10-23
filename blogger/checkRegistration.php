<?php

require_once ("database.php");
$isUsed;
$username = filter_input(INPUT_POST, "username",FILTER_SANITIZE_STRING);
$email_address = filter_input(INPUT_POST, "email_address",FILTER_SANITIZE_STRING);

$query = "SELECT * FROM user WHERE User_name = :username OR Email_add = :email_address";
$statement = $db->prepare($query);
$statement->bindValue(':username',$username);
$statement->bindValue(':email_address',$email_address);
$statement->execute();
$users = $statement->fetchAll();
$statement->closeCursor();

if(empty($users))
{
    $isUsed = false;
}else
{
    $isUsed = true;
}
echo json_encode($isUsed);
