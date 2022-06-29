<?php 

session_start();
require "..\..\..\shadow_af.php";
require "functions.inc.php";

if (isset($_POST['save-submit'])) {

    $name = $_POST['name'];
    $crn = $_POST['crn'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $category = $_POST['category'];

    $query = "UPDATE company SET nameComp = ?, crnComp = ?, addressComp = ?, phoneComp = ?, categoryComp = ? WHERE emailComp = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $query)) {
        header("location: profileComp.php?error=stmterror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $crn, $address, $phone, $category, $_SESSION['uidcomp']);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    header("location: ../profileComp.php");
    exit();
}
else {
    header("location: ../profileComp.php");
    exit();
}