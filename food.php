<?php 
    include_once 'header.php';
?>
    <!--Food page header-->
    <div class="activities-header">
        <h1>YUMMY FOOD!</h1>
        <img class="activities-header-logo" src="images/food-logo.png" alt="steaming food dish with a cartoon heart"/>
    </div>
    <!--Food page body-->
    <div class="activities-body">
        <!--Food page list with add and remove buttons-->
        <div class="activities-body-div-1">
            <h2>PLACES TO GO:</h2>
            <div class="activities-body-div-1-list">
                <h3>Asian Food</h3>
                <div class="activities-body-div-1-items">
                    <ul>
                        <li class="asian-1">Sweet Basil</li>
                        <li class="asian-2">Pho Thu Do</li>
                        <li class="asian-3">Table Sodam</li>
                    </ul>
                    <div class="activities-body-div-1-buttons">
                        <ul>
                            <li><button id="add" class="asian-1">Add</button><button id="remove" class="asian-1">Remove</button></li>
                            <li><button id="add" class="asian-2">Add</button><button id="remove" class="asian-2">Remove</button></li>
                            <li><button id="add" class="asian-3">Add</button><button id="remove" class="asian-3">Remove</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Food page dynamic list with added items-->
        <div class="activities-body-div-2">
            <h2>CREATE YOUR OWN ADVENTURE:</h2>
            <div class="activities-body-div-2-list">
                <ul>
                </ul>
            </div>
        </div>
    </div>
<?php 
    include_once 'footer.php';
?>