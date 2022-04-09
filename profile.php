<?php 
    include_once 'header.php';
?>

    <!--Profile page-->
    <div class="profile">
        <h1>PROFILE</h1>
        <div class="login-info">
            <h2>LOG-IN DETAILS</h2>
            <p>Email: <?php echo $_SESSION["useremail"]?></p>
            <p>Password: ********</p>
        </div>
        <div class="personal-info">
            <h2>PERSONAL INFO</h2>
            <p>First Name: <?php echo $_SESSION["userfname"]?></p>
            <p>Last Name: <?php echo $_SESSION["userlname"]?></p>
            <p>Email: <?php echo $_SESSION["useremail"]?></p>
        </div>

    </div>

<?php 
    include_once 'footer.php';
?>