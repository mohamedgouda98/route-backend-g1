<?php
include "dbcont.php";

    global $cont;

    $users = $cont->prepare("SELECT * FROM users");
    $users->execute();

    ?>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        <?php

        while($row = $users->fetchObject())
        {
            ?>
            <tr>
                <td><?php echo $row->id?></td>
                <td><?php echo $row->name?></td>
                <td><?php echo $row->email?></td>
                <td><?php echo $row->password?></td>
            </tr>
            <?php

        }

        ?>

    </table>










<?php







?>