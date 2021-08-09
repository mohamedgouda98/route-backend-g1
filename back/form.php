<?php

if(isset($_POST['submit']))
{
   $user = [$_POST['email'], $_POST['password']];

    $data = [
        ['gouda@gmail.com', "123456"],
        ['test@gmail.com',"12345678"],
        ['ahmed@cloud.com',"246810"]
    ];



    function login($data, $user)
    {
        if(in_array($user, $data))
        {
            return true;
        }
        return false;
    }


    echo login($data, $user);



}