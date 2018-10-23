<?php

require_once 'database.php';

$post_id = filter_input(INPUT_POST, "post_id", FILTER_SANITIZE_NUMBER_INT);
$user_id = filter_input(INPUT_POST, "user_id",FILTER_SANITIZE_NUMBER_INT);
$comment = filter_input(INPUT_POST, "comment",FILTER_SANITIZE_STRING);

$query = "INSERT INTO blog.comments
          (Text,User_id,Post_id)
          VALUES (:text,:user_id,:post_id)";

$statement = $db->prepare($query);
$statement->bindValue(":post_id",$post_id);
$statement->bindValue(":user_id",$user_id);
$statement->bindValue(":text",$comment);
$statement->execute();
$statement->closeCursor();

$query1 = "SELECT * FROM user WHERE User_id = :user_id";
$statement1 = $db->prepare($query1);
$statement1->bindValue(":user_id",$user_id);
$statement1->execute();
$user = $statement1->fetch();
$statement1->closeCursor();

$query2 = "SELECT * FROM comments WHERE Post_id = :post_id ORDER BY Date DESC LIMIT 1" ;
$statement2 = $db->prepare($query2);
$statement2->bindValue(":post_id",$post_id);
$statement2->execute();
$comments = $statement2->fetch();
$statement2->closeCursor();


$assocArray = array();
$assocArray['User_name'] = $user['User_name'];
$assocArray['Avatar_image'] = $user['Avatar_image'];
$assocArray['comment'] = $comments['Text'];
$assocArray['comment_date'] = $comments['Date'];

echo json_encode($assocArray);    