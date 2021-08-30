<?php
include "dbcont.php";
/**
 * check email
 * Steps:
 * 1- get email from user.
 * 2- check database if exists.
 * 3- return status.
 */
function checkEmail($email)
{
    global $cont;
    $checkEmail = $cont->prepare("SELECT email FROM empolyess WHERE email=? LIMIT 1");
    $checkEmail->execute([$email]);
    return $checkEmail->fetchAll();
}


/**
 * check Phone
 * Steps:
 * 1- get phone from user.
 * 2- check database if exists.
 * 3- return status
 */

function checkPhone($phone)
{
    global $cont;
    $checkPhone = $cont->prepare("SELECT phone FROM empolyess WHERE phone=? LIMIT 1");
    $checkPhone->execute([$phone]);
    return $checkPhone->fetchAll();
}
