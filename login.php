<?php 
    include_once 'header.php';
?>

    <!--Log In form-->
    <div class="signup-form">
      <h2>Welcome to</h2>
      <h1>OTTAWA ADVENTURES</h1>
      <div class="login-form-form">
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="email" placeholder="Email" required value="<?php if(isset($_COOKIE['email'])) {echo $_COOKIE['email'];};?>">
          <input type="password" name="pwd" placeholder="Password" required value="<?php if(isset($_COOKIE['pwd'])) {echo $_COOKIE['pwd'];};?>">
          <p class="forgot-password"><a href="reset-password.php">Forgot password?</a></p>
          <p class="remember-me"><input type="checkbox" name="remember-me">
          <label for="remember-me">Remember me</label></p>
          <?php
            if (isset($_GET["error"])){
              if ($_GET["error"] == "emptyinput") {
                echo "<p class='error-msg'>Please fill in all fields.</p>";
              }
              else if ($_GET["error"] == "incorrectlogin") {
                echo "<p class='error-msg'>Incorrect login information. Try again.</p>";
              }
            }
            /*if (isset($_GET["newpwd"])){
              if ($_GET["newpwd"] == "passwordupdated")) {
                echo "<p class='signupsuccess'>Your password has been reset.</p>";
              }
            }*/
            
          ?>
          <button type="submit" name="submit">LOG IN</button>
          <p class="to-sign-or-log">Don't have an account? <a href="signup.php">Sign up</a></p>
        </form>
      </div>
    </div>

<?php 
    include_once 'footer.php';
?>