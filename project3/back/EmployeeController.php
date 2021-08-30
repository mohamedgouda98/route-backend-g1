<?php

include "validations.php";
session_start();
global $cont;

if(isset($_POST['submitAdd']))
{

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $errors = [];

    $checkEmail = checkEmail($email);

    if(!empty($checkEmail))
    {
        $errors[] = "Email Exists";
    }

    $checkPhone = checkPhone($phone);
    if(!empty($checkPhone))
    {
        $errors[] = "phone is exists";

    }

    if(count($errors) == 0)
    {
        $addEmploye = $cont->prepare("INSERT INTO empolyess(name, email, phone, address) VALUES(?,?,?,?)");
        if($addEmploye->execute([$name,$email, $phone, $address]))
        {
            $_SESSION['added'] = "Employee added";
            header("Location:../index.php");
        }

    }
    else{
        $_SESSION['errors'] = $errors;
    }



}