<?php
include "dbcont.php";

    global $cont;

    $id = $_GET['id'];
    echo $id;

//
//    $id = 3;
//
//    $checkUser = $cont->prepare("SELECT id FROM users WHERE id=? LIMIT 1");
//    $checkUser->execute([$id]);
//
//    if($checkUser->fetch())
//    {
//        $deleteUser = $cont->prepare("DELETE FROM users WHERE id=? LIMIT 1");
//        if($deleteUser->execute([$id]))
//        {
//            echo"user Deleted";
//        }
//
//    }else
//    {
//        echo "user Notfound";
//    }
//








?>