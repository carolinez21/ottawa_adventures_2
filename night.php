<?php 
    include_once 'header.php';
?>
    <!--A Night Out page header-->
    <div class="activities-header">
        <h1>A NIGHT OUT!</h1>
        <img class="activities-header-logo" src="images/night-logo.png" alt="2 cocktail drinks cheersing"/>
    </div>
    <!--A Night Out page body-->
    <div class="activities-body">
        <!--A Night OUt page list with add and remove buttons-->
        <div class="activities-body-div-1">
            <h2>PLACES TO GO:</h2>
            <div class="activities-body-div-1-list">
                <h3>Bars</h3>
                <div class="activities-body-div-1-items">
                    <ul>
                        <li class="bar-1">Lieutenant's Pump</li>
                        <li class="bar-2">The Senate Tavern</li>
                        <li class="bar-3">Tailgators</li>
                    </ul>
                    <div class="activities-body-div-1-buttons">
                        <ul>
                            <li><button id="add" class="bar-1">Add</button><button id="remove" class="bar-1">Remove</button></li>
                            <li><button id="add" class="bar-2">Add</button><button id="remove" class="bar-2">Remove</button></li>
                            <li><button id="add" class="bar-3">Add</button><button id="remove" class="bar-3">Remove</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--A Night Out page dynamic list with added items-->
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