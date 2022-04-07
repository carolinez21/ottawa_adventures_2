<?php

if (isset($_POST["submit"])) {
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($fname, $lname, $email, $pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=mismatchingpasswords");
        exit();
    }
    if (emailExists($conn, $email) !== false){
        header("location: ../signup.php?error=emailalreadyexists");
        exit();
    }

    createUser($conn, $fname, $lname, $email, $pwd);

}
else {
    header("location: ../signup.php");
    exit();
}