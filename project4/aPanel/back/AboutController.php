<?php
session_start();
include "dbcont.php";

class AboutController
{
    public static function getAbout()
    {
        global $cont;
        $about = $cont->prepare("SELECT * FROM about WHERE id=?");
        $about->execute([1]);
        return $about;
    }

    public function update($name, $job, $gender, $age, $description, $from, $live_in, $img )
    {
        global $cont;
        $about = $cont->prepare("UPDATE about SET `name`=?, job=?, gender=?, age=?, description=?, `from`=?, live_in=?, img=? WHERE id=?");
        if($about->execute([$name, $job, $gender, $age, $description, $from, $live_in, $img, 1]))
        {
            $_SESSION['done'] = "About updated";
            header("Location:../about/updateAbout.php");
        }
    }

    public function moveImage($image)
    {
        $imageType = $image['type'];
        $imageTmpName = $image['tmp_name'];

        $imageTypeArray = explode('/', $imageType);

        $validate = $this->validateImage($imageTypeArray[1], ['png', 'jepg']);
        if($validate){
            $newImageName = 'about_'.time() . '.' . $imageTypeArray[1];
            $path = realpath("../../Images") . '/'  . $newImageName;
            move_uploaded_file($imageTmpName, $path);
           return $newImageName;
        }else
        {
            $_SESSION['error'] = "Upload Correct File";
            header("Location:../about/updateAbout.php");

        }
    }

    private function validateImage($type, $allowTypes)
    {
        if(in_array($type, $allowTypes))
        {
            return true;
        }
        return false;
    }


}

if(isset($_POST['updateAboutSubmit']))
{
    $name = $_POST['name'];
    $job = $_POST['job'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $description = $_POST['description'];
    $from = $_POST['from'];
    $live_in = $_POST['live_in'];
    $image = $_FILES['image'];
    $oldImage = $_POST['oldImage'];

    $about = new AboutController();

    if(!empty($image['name'])){
        $imageUrl = $about->moveImage($image);
    }else{
        $imageUrl = $oldImage;
    }

    $about->update($name, $job, $gender, $age, $description, $from, $live_in, $imageUrl );

}