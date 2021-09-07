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

<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="file"><br>
    <input type="submit" name="submit" value="Submit File">
</form>

</body>
</html>


<?php

if(isset($_POST['submit']))
{
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
    $fileName = $_FILES['file']['name'];
    $fileTempName = $_FILES['file']['tmp_name'];


    $fileTypeArray = explode('/', $fileType);
    var_dump($fileTypeArray);

    $path = __DIR__ . '/Images/' . time() . '.' . $fileTypeArray[1];

    move_uploaded_file($fileTempName, $path );

}

?>