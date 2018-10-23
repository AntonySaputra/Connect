<?php

require_once 'database.php';
include 'function.php';

$title = filter_input(INPUT_POST, 'title',FILTER_SANITIZE_STRING);
$text = filter_input(INPUT_POST, 'content',FILTER_SANITIZE_STRING);
$image = imageUpload('image', 'post');
$tag = filter_input(INPUT_POST, 'tag',FILTER_SANITIZE_STRING);
$disable_comment = filter_input(INPUT_POST, 'disable_comment',FILTER_SANITIZE_NUMBER_INT);
$user_id = filter_input(INPUT_POST, 'user_id',FILTER_SANITIZE_NUMBER_INT);

$query = "INSERT INTO post
        (Title,Tags,upvote,Text,Image,disable_comment,User_id)
         VALUES(:Title,:Tags,0,:Text,:Image,:disable_comment,:User_id)";
$statement = $db->prepare($query);
$statement->bindValue(":Title",$title);
$statement->bindValue(":Tags",$tag);
$statement->bindValue(":Text",$text);
$statement->bindValue(":Image",$image);
$statement->bindValue(":disable_comment",$disable_comment);
$statement->bindValue(":User_id",$user_id);
$statement->execute();
$statement->closeCursor();

header("location: index.php");