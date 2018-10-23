<?php

session_start();
$_SESSION['log_on'] = false; 
unset($_SESSION['username']);
echo json_encode(true);