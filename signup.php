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
          <button type="submit" name="submit">Sign Up</button>
        </form>
      </div>
      <?php
      if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput") {
          echo "<p>Fill in all fields</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
          echo "<p>Enter a proper email</p>";
        }
        else if ($_GET["error"] == "mismatchingpasswords") {
          echo "<p>Passwords don't match</p>";
        }
        else if ($_GET["error"] == "stmtFailed") {
          echo "<p>Something went wrong. Try again.</p>";
        }
        else if ($_GET["error"] == "emailalreadyexists") {
          echo "<p>An account already exists with this email</p>";
        }
        else if ($_GET["error"] == "none") {
          echo "<p>You have signed up</p>";
        }
      }
    ?>
    </div>

<?php 
    include_once 'footer.php';
?>