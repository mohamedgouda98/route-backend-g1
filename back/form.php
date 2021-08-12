<?php


class student
{
    private $subjectsData;
    private $degStatus;

    public function __construct($sub1, $sub2, $sub3, $sub4, $sub5)
    {
        $this->subjectsData= [$sub1, $sub2, $sub3, $sub4, $sub5];
    }

    public function degStatus()
    {
        for($i = 0; $i < count($this->subjectsData); $i++)
        {
            if($this->subjectsData[$i] >= 50)
            {
                $status = 1;
            }else{
                $status = 0;
            }

            $this->degStatus[] = [$this->subjectsData[$i], $status];

        }

        return $this->degStatus;
    }

    private function GPA()
    {
        $sum= 0;
        for($i=0; $i< count($this->subjectsData); $i++)
        {
            $sum += $this->subjectsData[$i];
        }
        return $sum / count($this->subjectsData);
    }

    public function __destruct()
    {
        echo "<br><br> your GPA Is " . $this->GPA();
    }
}




if (isset($_POST['submit']))
{
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];

    $user = new student($sub1, $sub2, $sub3, $sub4, $sub5);
}


?>

<table>
    <tr>
        <th>deg</th>
        <th>status</th>
    </tr>

    <?php
    $data = $user->degStatus();
    foreach ($data as $value)
    {
    ?>
        <tr>
            <td><?php echo $value[0]?></td>
            <td><?php echo $value[1]?></td>
        </tr>
    <?php
    }
    ?>

</table>
