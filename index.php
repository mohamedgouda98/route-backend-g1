<?php
// Lec 5
include 'base/navbar.php';
?>

<h5>Index Page</h5>
<!---->

<form method="post" action="back/form.php">
    <input type="number" required name="deg1" placeholder="deg1" id=""><br><br>
    <input type="number" required name="deg2" placeholder="deg2" id=""><br><br>
    <input type="number" required name="deg3" placeholder="deg3" id=""><br><br>
    <input type="number" required name="deg4" placeholder="deg4" id=""><br><br>
    <input type="number" required name="deg5" placeholder="deg5" id=""><br><br>
    <button name="submit">submit</button>
</form>





<?php
    include 'base/fotter.php';
?>

