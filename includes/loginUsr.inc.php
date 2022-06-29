<?php

if (isset($_POST['login-user-submit'])) {
    
    require "..\..\..\shadow_af.php";
    require "functions.inc.php";

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    if (emptyInputUserLogin($email, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $email, $pwd);
}
else {
    header("Location: ../login.php");
    exit();
}