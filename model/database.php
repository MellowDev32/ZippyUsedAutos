<?php

$dsn = 'mysql:host=lyn7gfxo996yjjco.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=z3kyct16b27fbgqb';
$username = 'fa8p9rs54xmhca3p';
$password = 'vahn6dn18b77x7dc';

try{
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e){
    $error = $e->getMessage();
    include('../view/error.php');
    exit();
}

?>