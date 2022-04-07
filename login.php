<?php 
    include_once 'header.php';
?>

    <!--Log In form-->
    <div class="login-form">
      <h2>Log In</h2>
      <div class="login-form-form">
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="email" placeholder="Email">
          <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="submit">Log In</button>
        </form>
      </div>
      <?php
      if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput") {
          echo "<p>Fill in all fields</p>";
        }
        else if ($_GET["error"] == "incorrectlogin") {
          echo "<p>Incorrect login information</p>";
        }
      }
    ?>
    </div>

<?php 
    include_once 'footer.php';
?>