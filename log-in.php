<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        </ul>
    </div>
    <!--Login form-->
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
     </form>
</body>
</html>