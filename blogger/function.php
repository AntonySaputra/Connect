<?php

function imageUpload($name, $folder) {
    $target_dir = $folder . "/";
    $target_file = $target_dir . basename($_FILES[$name]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES[$name]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {

        return $target_file;
    }
// Check file size
    if ($_FILES[$name]["size"] > 500000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

function selectLimitedPost($byField) {
    require 'database.php';
    if (isset($_SESSION['log_on'])) {
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];

            $query = "SELECT * FROM post WHERE User_id = :user_id ORDER BY " . $byField . " DESC LIMIT 4";
            $statement = $db->prepare($query);
            $statement->bindValue(':user_id', $user_id);
            $statement->execute();
            $posts = $statement->fetchAll();
            $statement->closeCursor();
        }
    }else{
        $posts = selectAllPost(4);
    }

    return $posts;
}

function selectAllPost($limit) {
    require 'database.php';

    $query = "SELECT * FROM post ORDER BY Date DESC LIMIT ".$limit;
    $statement = $db->prepare($query);

    $statement->execute();
    $posts = $statement->fetchAll();
    $statement->closeCursor();

    return $posts;
}

function getPost($id) {
    require 'database.php';

    $query = "SELECT * FROM post WHERE Post_id = :post_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':post_id', $id);
    $statement->execute();
    $post = $statement->fetch();
    $statement->closeCursor();

    return $post;
}

function selectAllComment($id)
{
    require 'database.php';
    $query = "SELECT * FROM comments WHERE Post_id = :post_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':post_id', $id);
    $statement->execute();
    $comments = $statement->fetchAll();
    $statement->closeCursor();
    
    return $comments;
}

function getUser($id)
{
    require 'database.php';
    $query = "SELECT * FROM user WHERE User_id = :user_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $id);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    
    return $user;
}

function countPost($id)
{
    require 'database.php';
    $query = "SELECT COUNT(p.Post_id) AS numOfPost FROM post p,user u WHERE u.User_id = p.User_id AND u.User_id = :user_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $id);
    $statement->execute();
    $count = $statement->fetch();
    $statement->closeCursor();
    
    return $count;
}
