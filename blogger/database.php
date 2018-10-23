<?php

//$dsn ="mysql:host=mysql02.comp.dkit.ie;dbname=D00197615;charset=utf8";
//$username = "D00197615";
//$password = "lppO18Wh";

$dsn ="mysql:host=localhost;dbname=blog;charset=utf8";
$username = "root";
$password = "";

try
{
    $db = new PDO($dsn, $username, $password);
    $db ->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_reporting(E_ALL);
    //echo "it worked";
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include ('database_error.php');
    exit();
}

