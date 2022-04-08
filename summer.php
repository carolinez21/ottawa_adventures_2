<?php 
    include_once 'header.php';
?>
    <!--Summer Activities page header-->
    <div class="activities-header">
        <h1>SUMMER ACTIVITIES!</h1>
        <img class="activities-header-logo" src="images/summer-logo.png" alt="pink cartoon smiley face sun"/>
    </div>
    <!--Summer Activities page body-->
    <div class="activities-body">
        <!--Summer Activities page list with add and remove buttons-->
        <div class="activities-body-div-1">
            <h2>PLACES TO GO:</h2>
            <div class="activities-body-div-1-list">
                <h3>Beaches</h3>
                <div class="activities-body-div-1-items">
                    <ul>
                        <li class="beach-1">Mooney's Bay</li>
                        <li class="beach-2">Britannia Beach</li>
                        <li class="beach-3">Petrie Island Beach</li>
                    </ul>
                    <div class="activities-body-div-1-buttons">
                        <ul>
                            <li><button id="add" class="beach-1">Add</button><button id="remove" class="beach-1">Remove</button></li>
                            <li><button id="add" class="beach-2">Add</button><button id="remove" class="beach-2">Remove</button></li>
                            <li><button id="add" class="beach-3">Add</button><button id="remove" class="beach-3">Remove</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Summer Activities page dynamic list with added items-->
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