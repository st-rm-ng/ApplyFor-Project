<?php 

session_start();
require "..\..\..\shadow_af.php";
require "functions.inc.php";

if (isset($_POST['save-submit'])) {

    $bio = $_POST['bio'];

    $query = "UPDATE user SET bioUser = ? WHERE emailUser = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $query)) {
        header("location: profileUser.php?error=stmterror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "ss", $bio, $_SESSION['uiduser']);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    header("location: ../profileUser.php");
    exit();
}
else {
    header("location: ../profileUser.php");
    exit();
}