<?php

if(isset($_POST['submit']))
{
   $user = [$_POST['email'], $_POST['password']];

    $data = [
        ['gouda@gmail.com', "123456"],
        ['test@gmail.com',"12345678"],
        ['ahmed@cloud.com',"246810"]
    ];

    if(in_array($user, $data))
    {
        echo "yes";
    }else{
        echo "no";
    }



}