<?php
// Lec 5
include 'base/navbar.php';
?>

<h5>Index Page</h5>

<form method="post" action="back/register.php">
    <input type="text" required name="name" placeholder="name" id=""><br><br>
    <input type="email" required name="email" placeholder="email" id=""><br><br>
    <input type="password" required name="password" placeholder="password" id=""><br><br>
    <button name="submit">submit</button>
</form>





<?php
    include 'base/fotter.php';
?>

