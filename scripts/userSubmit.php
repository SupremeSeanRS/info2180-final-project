<?php

function checkNames() {
    if (!empty($_POST['firstname']) && (!empty($_POST['lastname']))) {
        return true;
    }
    else {
        return false;
    }
}

function checkPassword() {
    if (!empty($_POST['password']) && preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,16}$/', $_POST['password'])) {
        return true;
    }
    else {
        return false;
    }
}

function checkEmail() {
    if (!empty($_POST['email'])) {
        return true;
    }
    else {
        return false;
    }
}

function sanitize($info) {
    $info = stripslashes($info);
    $info = htmlspecialchars($info);
    $info = trim($info);
    return $info;
}

if (isset($_POST['submit']) && checkNames() && checkPassword() && checkEmail() && $_POST['createUser' == "FLPE@"]) {
    
    $fname = sanitize($_POST[""]);
    $lname = sanitize($_POST[""]);
    $email = sanitize($_POST[""]);
    $rand = mt_rand();
    $pass = md5($_POST["password"] . $rand);
    $date = date("y-m-d");
}

?>