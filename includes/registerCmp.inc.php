<?php

require "..\..\..\shadow_af.php";
require "functions.inc.php";

if (isset($_POST['register-submit'])) {

    $uid = $_POST['uid']; // Company Unique Identifier
    $email = $_POST['email'];
    $compname = $_POST['compname']; // Full Company Name
    $crn = $_POST['crn'];
    $address = $_POST['address'];
    $pwd = $_POST['pwd'];
    $pwd_re = $_POST['pwd-repeat'];


    if (emptyInputCompRegister($uid, $email, $compname, $crn, $address, $pwd, $pwd_re) !== false) {
        header("location: ../registerComp.php?error=emptyinput");
        exit();
    }

    if (invalidUid($uid) !== false) {
        header("location: ../registerComp.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../registerComp.php?error=invalidemail");
        exit();
    }

    /* UNSOLVABLE PROBLEM
    if (invalidCompname($compname) !== false) {
        header("location: ../registerComp.php?error=invalidcompname");
        exit();
    }
    */

    if (invalidCRN($crn) !== false) {
        header("location: ../registerComp.php?error=invalidcrn");
        exit();
    }

    /*
    if (invalidAddress($address) !== false) {
        header("location: ../registerComp.php?error=invalidaddress");
        exit();
    }
    */

    if (pwdMatch($pwd, $pwd_re) !== false) {
        header("location: ../registerComp.php?error=notmachingpwds");
        exit();
    }

    if (uidExists($conn, $uid, $email) !== false) {
        header("location: ../registerComp.php?error=uidalreadyexists");
        exit();
    }

    createCompany($conn, $uid, $email, $compname, $crn, $address, $pwd);
}
else {
    header("Location: ../registerComp.php");
    exit();
}