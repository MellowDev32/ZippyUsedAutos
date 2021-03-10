<?php

$dsn = 'mysql:host=localhost;dbname=zippyusedautos';
$username = 'mgs_user';
$password = 'pa55word';

try{
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e){
    $error = $e->getMessage();
    include('../view/error.php');
    exit();
}

?>