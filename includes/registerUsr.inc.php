<?php

require "..\..\..\shadow_af.php";
require "functions.inc.php";

if (isset($_POST['register-submit'])) {

    $username = $_POST['uid']; // username == UID
    $email = $_POST['email'];
    $warea = $_POST['warea'];
    $pwd = $_POST['pwd'];
    $pwd_re = $_POST['pwd-repeat'];

    if (emptyInputUserRegister($username, $email, $pwd, $pwd_re) !== false) {
        header("location: ../registerUser.php?error=emptyinput");
        exit();
    }

    if (invalidUsername($username) !== false) {
        header("location: ../registerUser.php?error=invalidusername");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../registerUser.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd, $pwd_re) !== false) {
        header("location: ../registerUser.php?error=notmatchingpwds");
        exit();
    }

    if (usernameOrEmailExists($conn, $username, $email) !== false) {
        header("location: ../registerUser.php?error=usernameoremailalreadyexists");
        exit();
    }

    createUser($conn, $username, $email, $warea, $pwd);
}
else {
    header("location: ../registerUser.php");
    exit();
}