<?php

require_once 'database.php';

$post_id = filter_input(INPUT_POST, "post_id", FILTER_SANITIZE_NUMBER_INT);
$user_id = filter_input(INPUT_POST, "user_id",FILTER_SANITIZE_NUMBER_INT);

$query = "INSERT INTO blog.like
          (User_id,Post_id)
          VALUES (:user_id,:post_id)";

$statement = $db->prepare($query);
$statement->bindValue(":post_id",$post_id);
$statement->bindValue(":user_id",$user_id);
$statement->execute();
$statement->closeCursor();

$query1 = "UPDATE post
           SET upvote = upvote + 1
           WHERE Post_id = :post_id";
$statement1 = $db->prepare($query1);
$statement1->bindValue(":post_id",$post_id);
$statement1->execute();
$statement1->closeCursor();

$query2 = "SELECT upvote FROM post WHERE Post_id = :post_id";
$statement2 = $db->prepare($query2);
$statement2->bindValue(":post_id",$post_id);
$statement2->execute();
$like = $statement2->fetch();
$statement2->closeCursor();

echo json_encode($like['upvote']);    