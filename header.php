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
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="script/script.js" defer></script>
</head>
<body>
    <!--Nav bar-->
    <div class="nav">
        <img class="nav-logo" src="images/logo.png" alt="black and white logo of Ottawa's parliament"/>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <div class="nav-dropdown">
                    <button class="nav-dropbtn">Build Your Adventure</button>
                    <div class="nav-dropdown-content">
                        <a href="winter.php">Winter Activities</a>
                        <a href="summer.php">Summer Activities</a>
                        <a href="night.php">A Night Out</a>
                        <a href="food.php">Yummy Food</a>
                    </div>
                </div>
            </li>
            <li><a href="about.php">About</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <?php
                if (isset($_SESSION["useremail"])){
                    echo "<li><a href='profile.php'>Profile</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                }
                else {
                    echo "<li><a href='signup.php'>Sign Up</a></li>";
                    echo "<li><a href='login.php'>Log In</a></li>";
                }
            ?>
        </ul>
    </div>
