<?php

class auth{

    public static $data = [
                ['gouda@gmail.com', "123456"],
                ['test@gmail.com',"12345678"],
                ['ahmed@cloud.com',"246810"]
            ];



    public static function login($userDataInClass)
    {
       if(in_array($userDataInClass, self::$data))
       {
           return true;
       }

    }


}



if(isset($_POST['submit']))
{
    $userDataFromUser = [$_POST['email'], $_POST['password']];



    auth::login($userDataFromUser);
}
