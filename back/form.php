<?php

if(isset($_POST['submit']))
{

    $numbers = [
        $_POST['deg1'],
        $_POST['deg2'],
        $_POST['deg3'],
        $_POST['deg4'],
        $_POST['deg5'],
    ];


    function studentSuDeg($numbers)
    {
        $array = [];
        for($i=0; $i<count($numbers); $i++)
        {
            if($numbers[$i] >= 50)
            {
                $array[] = $numbers[$i];
            }
        }

        return $array;

    }


    function studentFaDeg($numbers)
    {
        $array = [];
        for($i=0; $i<count($numbers); $i++)
        {
            if($numbers[$i] < 50)
            {
                $array[] = $numbers[$i];
            }
        }
        return $array;
    }

    $suNumbers= studentSuDeg($numbers);
    $faNumbers= studentFaDeg($numbers);

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

