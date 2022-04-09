<?php 
    include_once 'header.php';
?>

    <!--Reset password form-->
    <div class="signup-form">
      <h1>Reset your password</h1>
      <p>An e-mail will be sent to you with instructions on how to reset your password.</p>
      <div class="signup-form-form">
        <form action="includes/reset-request.inc.php" method="post">
            <input type="text" name="email" placeholder="Enter your email address">
            <button type="submit" name="reset-request-submit">Send email</button>
        </form>
        <?php
            if (isset($_GET["reset"])) {
                if ($_GET["reset"] == "success") {
                    echo '<p class="signupsuccess">Check your e-mail!</p>';
                }
            }
        ?>
      </div>
     
    </div>
<?php 
    include_once 'footer.php';
?>