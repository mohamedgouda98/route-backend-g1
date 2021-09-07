<?php
include "dbcont.php";
/**
 * check email
 * Steps:
 * 1- get email from user.
 * 2- check database if exists.
 * 3- return status.
 */
function checkEmail($email, $id=null)
{
    global $cont;
    if(is_null($id))
    {
        $checkEmail = $cont->prepare("SELECT email FROM empolyess WHERE email=? LIMIT 1");
        $checkEmail->execute([$email]);
    }else{
        $checkEmail = $cont->prepare("SELECT email FROM empolyess WHERE email=? AND id!=? LIMIT 1");
        $checkEmail->execute([$email, $id]);
    }

    return $checkEmail->fetchAll();
}


/**
 * check Phone
 * Steps:
 * 1- get phone from user.
 * 2- check database if exists.
 * 3- return status
 */

function checkPhone($phone, $id = null)
{
    global $cont;
    if(is_null($id))
    {
        $checkPhone = $cont->prepare("SELECT phone FROM empolyess WHERE phone=? LIMIT 1");
        $checkPhone->execute([$phone]);

    }else
    {
        $checkPhone = $cont->prepare("SELECT phone FROM empolyess WHERE phone=? AND id!=? LIMIT 1");
        $checkPhone->execute([$phone, $id]);
    }

    var_dump($checkPhone->fetchAll());
    return $checkPhone->fetchAll();

}

/**
 * check User Exist by id
 * Steps:
 * 1- get id from user.
 * 2- check database if exists.
 * 3- return status
 */

function checkUserExist($id)
{
    global $cont;
    $checkUser = $cont->prepare("SELECT id FROM empolyess WHERE id=? LIMIT 1");
    $checkUser->execute([$id]);
    $data = $checkUser->fetch();
    return $data['id'];
}


