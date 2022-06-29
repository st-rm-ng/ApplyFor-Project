<?php 

session_start();
require "..\..\..\shadow_af.php";
require "functions.inc.php";

if (isset($_POST['save-submit'])) {

    $description = $_POST['desc'];

    $query = "UPDATE company SET descComp = ? WHERE emailComp = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $query)) {
        header("location: profileComp.php?error=stmterror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "ss", $description, $_SESSION['uidcomp']);
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