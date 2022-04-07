<?php 
    include_once 'header.php';
?>

    <!--Sign Up form-->
    <div class="signup-form">
      <h2>Sign Up</h2>
      <div class="signup-form-form">
      <form action="signup.inc.php" method="post">
        <input type="text" name="firstname" placeholder="First Name">
        <input type="text" name="lastname" placeholder="Last Name">
        <input type="text" name="email" placeholder="Email Address">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Confirm Password">
        <button type="submit" name="submit">Sign Up</button>
      </form>
    </div>

<?php 
    include_once 'footer.php';
?>