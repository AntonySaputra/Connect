<?php
require_once 'database.php';


$base = filter_input(INPUT_POST, 'base',FILTER_SANITIZE_STRING);
$search = "%".filter_input(INPUT_POST,'search',FILTER_SANITIZE_STRING)."%";

$query="SELECT * FROM post p,user u WHERE u.User_id = p.User_id AND ".$base." LIKE :search";
$statement = $db->prepare($query);
$statement->bindValue(":search",$search);
$statement->execute();
$posts = $statement->fetchAll();
$statement->closeCursor();


echo json_encode($posts);

