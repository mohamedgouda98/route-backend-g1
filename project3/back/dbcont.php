<?php

$server = "mysql-gouda";
$userName = "gouda";
$password = "password";
$dbName  = "homesteat";

try{
    $cont = new PDO("mysql:host=$server;dbname=$dbName", $userName, $password);

} catch (PDOException $e)
{
    echo "error : " . $e->getMessage();
}