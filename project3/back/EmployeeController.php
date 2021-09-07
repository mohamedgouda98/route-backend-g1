<?php
ob_start();
include "validations.php";
session_start();

class EmployeeController
{

    public $errors = [];

    public function addEmployee($name, $email, $phone, $address)
    {
        global $cont;

        $this->validateData($email, $phone);

        if(count($this->errors) == 0)
        {
            $addEmployee = $cont->prepare("INSERT INTO empolyess(name, email, phone, address) VALUES(?,?,?,?)");
            if($addEmployee->execute([$name,$email, $phone, $address]))
            {
                $_SESSION['done'] = "Employee added";
                header("Location:../index.php");
            }
        }

    }

    public static function getData()
    {
        global $cont;
        $data = $cont->prepare("SELECT * FROM empolyess");
        $data->execute();
        return $data;
    }

    public function deleteEmployee($id)
    {
        global $cont;
        $employee = checkUserExist($id);
        if(is_null($employee))
        {
            $errors[] = "user not found";
            $_SESSION['errors'] = $errors;
        }else
        {
            $delete = $cont->prepare("DELETE FROM empolyess WHERE id=?");
            $delete->execute([$id]);
            $_SESSION['done'] = "User Was Deleted";
        }
        header("Location:../index.php");

    }

    public function updateEmployee($name, $email, $address, $phone, $id)
    {
        global $cont;
        $this->validateData($email, $phone, $id);

        if(count($this->errors) == 0)
        {
            $update = $cont->prepare("UPDATE empolyess SET name=?, email=?, address=?, phone=? WHERE id=? LIMIT 1");
            $update->execute([$name, $email, $address, $phone, $id]);
            $_SESSION['done'] ="employee was updated";
            header("Location:../index.php");
        }


    }

    private function validateData($email, $phone, $id=null)
    {
        $checkEmail = checkEmail($email, $id);

        if(!empty($checkEmail))
        {
            $this->errors[] = "Email Exists";
        }

        $checkPhone = checkPhone($phone, $id);
        if(!empty($checkPhone))
        {
            $this->errors[] = "phone is exists";

        }
        if(count($this->errors) != 0)
        {
            $_SESSION['errors'] = $this->errors;
            header("Location:../index.php");
        }
    }

}
if(isset($_POST['submitAdd']))
{

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];


    $employee = new EmployeeController();
    $employee->addEmployee($name, $email, $phone, $address);

}

if(isset($_POST['submitDelete']))
{
    $id = $_POST['id'];
    $employee = new EmployeeController();
    $employee->deleteEmployee($id);
}

if(isset($_POST['submitUpdate']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $id = $_POST['id'];

    $employee = new EmployeeController();
    $employee->updateEmployee($name, $email, $address, $phone, $id);
}

