<?php 
    include_once 'header.php';
?>
    <!--Home page header-->
    <div class="home-header">
        <img class="home-header-img" src="images/ottawa-home.png" alt="photo of people skating on the Rideau Canal in Ottawa"/>
        <?php
            if (isset($_SESSION["useremail"])){
                echo "<p>Hello there " . $_SESSION["fname"] . "</p>";
            }
        ?>
        <div class="home-header-title">COME EXPLORE OTTAWA WITH US!</div>
        <div class="home-header-subtitle">Let's discover all of the adventures this city has to offer...</div>
        <div class="home-header-buttons">
            <button class="home-header-btn"><a href="winter.html">WINTER ACTIVITIES</a></button>
            <button class="home-header-btn"><a href="summer.html">SUMMER ACTIVITIES</a></button>
            <button class="home-header-btn"><a href="night.html">A NIGHT OUT</a></button>
            <button class="home-header-btn"><a href="food.html">YUMMY FOOD</a></button>
        </div>
    </div>

<?php 
    include_once 'footer.php';
?>