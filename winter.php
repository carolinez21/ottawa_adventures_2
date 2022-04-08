<?php 
    include_once 'header.php';
?>
    <!--Winter Activities page header-->
    <div class="activities-header">
        <h1>WINTER ACTIVITIES!</h1>
        <img class="activities-header-logo" src="images/winter-logo.png" alt="3 pink snowflakes"/>
    </div>
    <!--Winter Activities page body-->
    <div class="activities-body">
        <!--Winter Activities page list with add and remove buttons-->
        <div class="activities-body-div-1">
            <h2>PLACES TO GO:</h2>
            <div class="activities-body-div-1-list">
                <h3>Ice Skating</h3>
                <div class="activities-body-div-1-items">
                    <ul>
                        <li class="skating-1">Rideau Canal</li>
                        <li class="skating-2">Parc Eco-Odysee</li>
                        <li class="skating-3">Rink of Dreams</li>
                    </ul>
                    <div class="activities-body-div-1-buttons">
                        <ul>
                            <li><button id="add" class="skating-1">Add</button><button id="remove" class="skating-1">Remove</button></li>
                            <li><button id="add" class="skating-2">Add</button><button id="remove" class="skating-2">Remove</button></li>
                            <li><button id="add" class="skating-3">Add</button><button id="remove" class="skating-3">Remove</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Winter Activities page dynamic list with added items-->
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