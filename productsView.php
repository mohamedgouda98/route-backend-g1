<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

    include 'back/dbcont.php';
    global $cont;

    $products = $cont->prepare("SELECT * FROM products LIMIT 1");
    $products->execute();

    $productsUnder100 = $cont->prepare("SELECT * FROM products WHERE price<=100");
    $productsUnder100->execute();


    $productsBiggerThan100 = $cont->prepare("SELECT * FROM products WHERE price>100");
    $productsBiggerThan100->execute();



?>


<h4>All Products</h4>
<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Delete</th>
    </tr>
    <?php
    while ($row = $products->fetch())
    {
        ?>
        <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['discount']?></td>
            <td><a href="back/form.php?id=<?php echo $row['idس']?>">delete</a></td>
        </tr>
    <?php
    }
    ?>

</table>
<hr>

<h4>All Products Where Price > 100</h4>
<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Discount</th>
    </tr>
    <?php
        while ($row = $productsUnder100->fetch())
        {
            ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['discount'] ?></td>
            </tr>
        <?php
        }
    ?>
</table>
<hr>

<h4>All Products Where Price < 100</h4>
<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Discount</th>
    </tr>
    <?php
    while ($row = $productsBiggerThan100->fetch())
    {
        ?>
        <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['discount'] ?></td>
        </tr>
        <?php
    }
    ?>
</table>







</body>
</html>