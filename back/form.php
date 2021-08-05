<?php

if(isset($_POST['submit']))
{
    $numbers = ["01000000", "01111111", "012222222"];

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];

    if(array_search($phone, $numbers))
    {
        echo "yes";
    }else{
        echo "invalid Number";
    }

//    echo $firstName . '<br>';
//    echo $phone;

}
