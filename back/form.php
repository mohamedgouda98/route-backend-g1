<?php

interface Auth
{
    public function login();
}


class userAuth implements Auth
{
    private $email;
    private $password;
    private $userData;

    private $emails = [
        ['dev.mohamedgouda@gmail.com', '12345678'],
        ['dev@gmail.com', '12345678'],
        ['mohamed@gmail.com', '12345678'],
    ];

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->userData = [$email, $password];
    }

    public function login(){
        if(in_array($this->userData, $this->emails))
        {
            echo "Auth User";
        }else{
            echo "User Not Found";
        }

    }
}





if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new userAuth($email, $password);
    $user->login();

}
