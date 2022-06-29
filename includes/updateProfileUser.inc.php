<?php 

session_start();
require "..\..\..\shadow_af.php";
require "functions.inc.php";

if (isset($_POST['save-submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $warea = $_POST['warea'];
    $spec = $_POST['spec'];

    $query = "UPDATE user SET nameUser = ?, phoneUser = ?, cityUser = ?, genderUser = ?, specUser = ?, IDtag_fk = ? WHERE emailUser = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $query)) {
        header("location: profileUser.php?error=stmterror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "sssssss", $name, $phone, $city, $gender, $spec, $warea, $_SESSION['uiduser']);
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