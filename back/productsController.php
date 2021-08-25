<?php
ob_start();

if(isset($_POST['submit']))
{
    include 'dbcont.php';
    global $cont;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];

    $product = $cont->prepare("INSERT INTO products(name,price,discount) VALUES(?,?,?)");
    if($product->execute([$name, $price, $discount]))
    {
        header("Location:../productsView.php");
    }else{
        echo "There Problem";
    }


}