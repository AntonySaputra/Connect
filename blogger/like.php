<?php
require_once ("database.php");
$liked;
$post_id = filter_input(INPUT_POST, "post_id",FILTER_SANITIZE_NUMBER_INT);
$user_id = filter_input(INPUT_POST, "user_id",FILTER_SANITIZE_NUMBER_INT);

$query = "SELECT * FROM blog.like WHERE Post_id = :post_id AND User_id = :user_id";
$statement = $db->prepare($query);
$statement->bindValue(':post_id',$post_id);
$statement->bindValue(':user_id',$user_id);
$statement->execute();
$like = $statement->fetch();
$statement->closeCursor();

if(empty($like))
{
    $liked = false;
}else
{
    $liked = true;
}
echo json_encode($liked);