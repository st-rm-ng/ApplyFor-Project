<?php

if (isset($_POST['login-comp-submit'])) {

    require "..\..\..\shadow_af.php";
    require "functions.inc.php";
    
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    if (emptyInputCompLogin($email, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginCompany($conn, $email, $pwd);
}
else {
    header("Location: ../login.php");
    exit();
}