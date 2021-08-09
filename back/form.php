<?php

if(isset($_POST['submit']))
{
    $deg1 = $_POST['deg1'];
    $deg2 = $_POST['deg2'];
    $deg3 = $_POST['deg3'];
    $deg4 = $_POST['deg4'];
    $deg5 = $_POST['deg5'];

    $suNumbers= [];
    $faNumbers= [];

    if($deg1>= 50)
    {
        $suNumbers[] = $deg1;
    }else
    {
        $faNumbers[] = $deg1;
    }

    if($deg2>= 50)
    {
        $suNumbers[] = $deg2;
    }else
    {
        $faNumbers[] = $deg2;
    }

    if($deg3>= 50)
    {
        $suNumbers[] = $deg3;
    }else
    {
        $faNumbers[] = $deg3;
    }

    if($deg4>= 50)
    {
        $suNumbers[] = $deg4;
    }else
    {
        $faNumbers[] = $deg4;
    }

    if($deg5>= 50)
    {
        $suNumbers[] = $deg5;
    }else
    {
        $faNumbers[] = $deg5;
    }


}


?>



<table>
    <tr>
        <th>Deg</th>
        <th>Status</th>
    </tr>

    <?php
        foreach ($suNumbers as $number)
        {
           ?>
            <tr>
                <td><?php echo $number?></td>
                <td>Su</td>
            </tr>
        <?php
        }

        foreach ($faNumbers as $number)
        {
           ?>
            <tr>
                <td><?php echo $number?></td>
                <td>Fa</td>
            </tr>
        <?php
        }

    ?>



</table>

