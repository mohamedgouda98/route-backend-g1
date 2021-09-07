<?php
ob_start();
session_start();
include "dbcont.php";

class skillsController
{
    public function add($name, $number)
    {
        global $cont;
        $addSkill = $cont->prepare("INSERT INTO skills(name,number) VALUES(?,?)");
        if($addSkill->execute([$name, $number]))
        {
         $_SESSION['done'] = "Skill Was Added";
         header("Location:../skills/addSkill.php");
        }
    }

    public static function getSkills()
    {
        global $cont;
        $skills = $cont->prepare("SELECT * FROM skills");
        $skills->execute([]);
        return $skills;
    }

    public function delete($skillId)
    {
        global $cont;
        $skill = $cont->prepare("DELETE FROM skills WHERE id=? LIMIT 1");
        if($skill->execute([$skillId]))
        {
            $_SESSION['done'] = "Skill Was Deleted";
            header("Location:../skills/skillList.php");
        }
    }

    public function update($name, $number, $skillId)
    {
        global $cont;
        $skill = $cont->prepare("UPDATE skills SET name=?, number=? WHERE id=? LIMIT 1");
        if($skill->execute([$name, $number, $skillId]))
        {
            $_SESSION['done'] = "Skill was updated";
            header("Location:../skills/skillList.php");
        }
    }

}

$skill = new skillsController();

if(isset($_POST['skillAddSubmit']))
{
    $name = $_POST['name'];
    $number = $_POST['number'];

    $skill->add($name, $number);
}

if(isset($_POST['deleteSkillSubmit']))
{
    $skillId = $_POST['skillId'];

    $skill->delete($skillId);
}

if(isset($_POST['updateSkillSubmit']))
{
    $name = $_POST['name'];
    $number = $_POST['number'];
    $skillId = $_POST['skillId'];

    $skill->update($name, $number, $skillId);
}