<?php

class auth
{
//    private $name;
    private $email;
    private $password;
    private $dbCont;

    public function __construct($userEmail, $userPassword, $cont)
    {
        $this->dbCont = $cont;
        $this->email = $userEmail;
        $this->password = $userPassword;
    }

    private function validator($name, $email, $password)
    {
        $errors = [];
        if(strlen($name) < 3){
            $errors[] = "name must be bigger than 2";
        }

        if(strlen($password) < 8)
        {
            $errors[] = "password must be 8 charts";
        }

        $checkEmail = $this->dbCont->prepare("SELECT email FROM users WHERE email=?");
        $checkEmail->execute([$email]);
        if(!empty($checkEmail->fetchAll()))
        {
            $errors[] = "Email Exists";
        }

        return $errors;
    }

    public function register($name)
    {
        $validator =  $this->validator($name, $this->email, $this->password);
        if(empty($validator))
        {
            $userRegister = $this->dbCont->prepare("INSERT INTO users(name,email,password) VALUES(?,?,?)");
            $userRegister->execute([$name, $this->email, $this->password]);
            return 1;
        }
        return $validator;
    }

    public function login(){
        $userLogin = $this->dbCont->prepare("SELECT * FROM users WHERE email=? AND password=?");
        $userLogin->execute([$this->email, $this->password]);
        return $userLogin->fetch();
    }
}

if(isset($_POST['submit']))
{
    include "dbcont.php";

    global $cont;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new auth($email, $password, $cont);
    $registerFunction=  $user->register($name);

    if($registerFunction != 1)
    {
        for($i=0; $i<count($registerFunction); $i++)
        {
            echo $registerFunction[$i]. '<br>';
        }
    }else
    {
        var_dump( $registerFunction);
    }



//    $addUser = $cont->prepare("INSERT INTO users(name,email,password) VALUES(?,?,?)");
//    $addUser->execute([$name, $email, $password]);
//    var_dump($addUser);

}
