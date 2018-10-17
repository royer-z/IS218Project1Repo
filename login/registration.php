<?php
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$birthday = $_POST['birthday'];
$email = $_POST["email"];
$password = $_POST["password"];

checkFirstName($firstName);
checkLastName($lastName);
checkBirthday($birthday);
checkEmail($email);
checkPassword($password);

function checkFirstName($data) {
    if (empty($data)) {
        print "First name error: please enter your first name.<br>";
    }
    else {
        print "Valid first name: ".$data."<br>";
    }
}

function checkLastName($data) {
    if (empty($data)) {
        print "Last name error: please enter your last name.<br>";
    }
    else {
        print "Valid last name: ".$data."<br>";
    }
}

function checkBirthday($data) {
    if (empty($data)) {
        print "Birthday error: please enter your birthday.<br>";
    }
    else {
        print "Valid birthday: ".$data."<br>";
    }
}

function checkEmail($data) {
    $validEmail = TRUE;
    if (empty($data)) {
        print "Email error: please enter an email address.<br>";
        $validEmail = FALSE;
    }
    if (strpos($data, '@') == FALSE) {
        if (strlen($data) == 0) {
            print "Email error: please use '@' in your email address.<br>";
            $validEmail = FALSE;
        }
        else {
            print "Email error: please use '@' in your email address. Your entry: ".$data."<br>";
            $validEmail = FALSE;
        }
    }
    if ($validEmail == TRUE) {
        print "Valid email: ".$data."<br>";
    }
}

function checkPassword ($data) {
    $validPassword = TRUE;
    if (empty($data)) {
        print "Password error: please enter a password.<br>";
        $validPassword = FALSE;
    }
    if (strlen($data) < 8) {
        if (strlen($data) == 0) {
            print "Password error: please enter a password that is at least 8 characters long. Your entry is ".strlen($data)." characters long.<br>";
        }
        else {
            print "Password error: please enter a password that is at least 8 characters long. Your entry '".$data."' is ".strlen($data)." characters long.<br>";
        }
        $validPassword = FALSE;
    }
    if ($validPassword == TRUE) {
        print "Valid password: ".$data."<br>";
    }
}
?>