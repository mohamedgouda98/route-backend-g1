<?php
//
//class auth{
//
//    public $data = [
//                ['gouda@gmail.com', "123456"],
//                ['test@gmail.com',"12345678"],
//                ['ahmed@cloud.com',"246810"]
//            ];
//
//    public $userDataInClass;
//
//    public function login()
//    {
//       if(in_array($this->userDataInClass, $this->data))
//       {
//           return true;
//       }
//
//    }
//
//
//}
//
//
//
//if(isset($_POST['submit']))
//{
//    $userDataFromUser = [$_POST['email'], $_POST['password']];
//
//    $user = new auth();
//    $user->userDataInClass = $userDataFromUser;
//
//
//    echo $user->login();
//}
//
//


class user
{
    public $email;
    public $password;

    public function __construct($userEmail, $userPassword)
    {
        $this->email = $userEmail;
        $this->password = $userPassword;
    }
}


$ahmed = new user("mohamed@gmail.com", "123456");

var_dump($ahmed);




