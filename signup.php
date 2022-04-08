<?php 
    include_once 'header.php';
?>

    <!--Sign Up form-->
    <div class="signup-form">
      <h2>Welcome to</h2>
      <h1>OTTAWA ADVENTURES</h1>
      <div class="signup-form-form">
        <form action="includes/signup.inc.php" method="post">
          <input type="text" name="firstname" placeholder="First Name">
          <input type="text" name="lastname" placeholder="Last Name">
          <input type="text" name="email" placeholder="Email Address">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwdrepeat" placeholder="Confirm Password">
          <?php
            if (isset($_GET["error"])){
              if ($_GET["error"] == "emptyinput") {
                echo "<p class='error-msg'>Please fill in all fields.</p>";
              }
              else if ($_GET["error"] == "invalidemail") {
                echo "<p class='error-msg'>Please enter a proper email address.</p>";
              }
              else if ($_GET["error"] == "mismatchingpasswords") {
                echo "<p class='error-msg'>Passwords don't match.</p>";
              }
              else if ($_GET["error"] == "stmtFailed") {
                echo "<p class='error-msg'>Something went wrong. Try again.</p>";
              }
              else if ($_GET["error"] == "emailalreadyexists") {
                echo "<p class='error-msg'>An account with this email already exists.</p>";
              }
              else if ($_GET["error"] == "none") {
                echo "<p class='error-msg'>You have signed up</p>";
              }
            }
          ?>
          <button type="submit" name="submit">SIGN UP</button>
          <p class="to-sign-or-log">Already have an account? <a href="login.php">Log in</a></p>
        </form>
      </div>
     
    </div>
<?php 
    include_once 'footer.php';
?>