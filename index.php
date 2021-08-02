<?php
// Lec 5
include 'base/navbar.php';
?>

<h5>Index Page</h5>

<form method="post" action="">
    <input type="email" required name="email" placeholder="Email" id=""><br><br>
    <input type="number" required name="salary" placeholder="number" id=""><br><br>
    <button name="submit">submit</button>

</form>



<?php

if(isset($_POST['submit']))
{
   $email = $_POST['email'];
   $salary = $_POST['salary'];

}

?>


<div class="info">
    <h3> Email is : <?php echo $email?> </h3>
    <h5> Salary is : <?php echo $salary?> </h5>

</div>

<?php
    include 'base/fotter.php';
?>

