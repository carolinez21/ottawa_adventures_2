<?php 
    include_once 'header.php';
?>

    <!--Create new password form-->
    <div class="reset-password-form">
        <?php
            $selector = $_GET["selector"];
            $validator = $_GET["validator"];

            if (empty($selector) || empty($validator)){
                echo "Could not validate your request.";
            }else {
                if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                    ?>
                    <form action="includes/reset-password.inc.php" method="post">
                        <input type="hidden" name="selector" value="<?php echo $selector ?>;">
                        <input type="hidden" name="validator" value="<?php echo $validator ?>;">
                        <input type="password" name="pwd" placeholder="New password">
                        <input type="password" name="pwd-repeat" placeholder="Confirm new password">
                        <button type="submit" name="reset-password-submit">Reset password</button>
                    </form>
                    <?php
                }
            }
        ?>
    
    </div>
<?php 
    include_once 'footer.php';
?>