<?php 

require "..\..\..\shadow_af.php";
require "functions.inc.php";

if (isset($_SESSION['uiduser'])) {
    $query = "SELECT * FROM user WHERE emailUser = '" . $_SESSION['uiduser'] . "'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $uid = $row['uidUser'];
    $name = $row['nameUser'];
    $email = $row['emailUser'];
    $phone = $row['phoneUser'];
    $city = $row['cityUser'];
    $gender = $row['genderUser'];
    $spec = $row['specUser'];
    $bio = $row['bioUser'];

    mysqli_free_result($result);
    mysqli_close($conn);
}
else if (isset($_SESSION['uidcomp'])) {
    $query = "SELECT * FROM company WHERE emailComp = '" . $_SESSION['uidcomp'] . "'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $uid = $row['uidComp'];
    $name = $row['nameComp'];
    $email = $row['emailComp'];
    $crn = $row['crnComp'];
    $address = $row['addressComp'];
    $phone = $row['phoneComp'];
    $category = $row['categoryComp'];
    $description = $row['descComp'];

    mysqli_free_result($result);
    mysqli_close($conn);
}
else {
    header("Location: login.php");
    exit();
}