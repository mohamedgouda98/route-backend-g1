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






class car
{
    public $color;
    public $size;

    public function __construct($color, $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function test($number, $tax)
    {
        return $number + $tax ;
    }

}

class bmw extends car
{
    public $model;

    public function __construct($color, $size, $model)
    {
        $this->model = $model;
        parent::__construct($color, $size);
    }

    public function echoFunctionTest()
    {
       echo $this->color;
    }


}


$newCar = new bmw("black", "4", "2022");
echo $newCar->model;
//$newCar->echoFunctionTest();



