<?php

function invalidEmail($email) {

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwd_re) {
    
    if ($pwd !== $pwd_re) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}






// USER register functions

function emptyInputUserRegister($username, $email, $pwd, $pwd_re) {

    if (empty($username) || empty($email) || empty($pwd) || empty($pwd_re)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUsername($username) {

    if (!preg_match("/^[a-zA-Z0-9_-]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function usernameOrEmailExists($conn, $username, $email) {

    $query = "SELECT * FROM user WHERE uidUser = ? OR emailUser = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $query)) {
        header("location: ../registerUser.php?error=stmterror");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row; 
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $warea, $pwd) {

    $query = "INSERT INTO user (uidUser, emailUser, pwdUser, IDtag_fk) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $query)) {
        header("location: ../registerUser.php?error=stmterror");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hashedPwd, $warea);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../registerUser.php?error=none");
    exit();
}







// COMPANY register functions

function emptyInputCompRegister($uid, $email, $compname, $crn, $address, $pwd, $pwd_re) {
    
    if (empty($uid) || empty($email) || empty($compname) || empty($crn) || empty($address) || empty($pwd) || empty($pwd_re)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($uid) {

    if (!preg_match("/^[a-zA-Z0-9_-]*$/", $uid)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

/* UNSOLVABLE PROBLEM
function invalidCompname($compname) {
    
    if (!preg_match("/^[ a-zA-Z0-9_-.]*$/", $compname)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
*/

function invalidCRN($crn) {
    
    if (!preg_match("/^[a-zA-Z0-9]*$/", $crn)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidAddress($address) {
    
    if (!preg_match("/^[ a-zA-Z0-9,.()-]*$/", $address)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $uid, $email) {
    
    $query = "SELECT * FROM company WHERE uidComp = ? OR emailComp = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $query)) {
        header("location: ../registerComp.php?error=stmterror");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $uid, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createCompany($conn, $uid, $email, $compname, $crn, $address, $pwd) {

    $query = "INSERT INTO company (uidComp, emailComp, nameComp, crnComp, addressComp, pwdComp) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $query)) {
        header("location: ../registerComp.php?error=stmterror");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $uid, $email, $compname, $crn, $address, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../registerComp.php?error=none");
    exit();
}





// USER LOGIN fucntions

function emptyInputUserLogin($email, $pwd) {

    if (empty($email) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $pwd) {

    $uidExists = usernameOrEmailExists($conn, $email, $email);

    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $hashedPwd = $uidExists["pwdUser"]; 
    $checkPwd = password_verify($pwd, $hashedPwd);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["type"] = "USER";
        $_SESSION["iduser"] = $uidExists["IDuser"];
        $_SESSION["uiduser"] = $uidExists["emailUser"];
        header("location: ../index.php");
        exit();
    }
}





// COMAPNY LOGIN fucntions

function emptyInputCompLogin($email, $pwd) {

    if (empty($email) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginCompany($conn, $email, $pwd) {

    $uidExists = uidExists($conn, $email, $email);

    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $hashedPwd = $uidExists["pwdComp"]; 
    $checkPwd = password_verify($pwd, $hashedPwd);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["type"] = "COMPANY";
        $_SESSION["idcomp"] = $uidExists["IDcomp"];
        $_SESSION["uidcomp"] = $uidExists["emailComp"];
        header("location: ../index.php");
        exit();
    }
}