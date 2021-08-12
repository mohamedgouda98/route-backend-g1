<?php
// Lec 5
include 'base/navbar.php';
?>

<h5>Index Page</h5>

<form method="post" action="back/form.php">
    <input type="number" required name="sub1" placeholder="sub1" id=""><br><br>
    <input type="number" required name="sub2" placeholder="sub2" id=""><br><br>
    <input type="number" required name="sub3" placeholder="sub3" id=""><br><br>
    <input type="number" required name="sub4" placeholder="sub4" id=""><br><br>
    <input type="number" required name="sub5" placeholder="sub5" id=""><br><br>
    <button name="submit">submit</button>
</form>





<?php
    include 'base/fotter.php';
?>

