<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ottawa Adventures</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <!--Nav bar-->
    <div class="nav">
        <img class="nav-logo" src="images/logo.png" alt="black and white logo of Ottawa's parliament"/>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li>
                <div class="nav-dropdown">
                    <button class="nav-dropbtn">Build Your Adventure</button>
                    <div class="nav-dropdown-content">
                        <a href="winter.html">Winter Activities</a>
                        <a href="summer.html">Summer Activities</a>
                        <a href="night.html">A Night Out</a>
                        <a href="food.html">Yummy Food</a>
                    </div>
                </div>
            </li>
            <li><a href="about.html">About</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <?php
                if (isset($_SESSION["useremail"])){
                    echo "<li><a href='profile.php'>Profile</a></li>";
                    echo "<li><a href='include/logout.inc.php'>Log out</a></li>";
                }
                else {
                    echo "<li><a href='signup.php'>Sign Up</a></li>";
                    echo "<li><a href='login.php'>Log In</a></li>";
                }
            ?>
        </ul>
    </div>
