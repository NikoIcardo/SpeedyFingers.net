<?php
    require "header.php";
?>
<header>
    <nav class="navbar navbar-default navbar-expand-lg navbar-light fixed-top jeb">
        <a class="mainBoxes logo" id = 'logo'>Speedy Fingers<br><small class = 'text-muted'> Typing Website</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse subnav" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active Nav subnavbtn"><a class="nav-link" href = "index.php">Typing Tests</a></li>
                <li class="nav-item Nav"><a class="nav-link" href = "profile.php">Your Profile</a></li>
                <li class="nav-item Nav"><a class="nav-link" href = "updates.php">Whats Coming!</a></li>
                <li class="nav-item Nav"><a class="nav-link" href = "history.php">History</a></li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-default navbar-expand-lg navbar-light fixed-top jeb">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active Nav"><a class="nav-link" href = "index.php">Typing Test</a></li>
                <li class="nav-item Nav"><a class="nav-link" href = "typeYourOwnText.php">Type Your Own Text</a></li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <br>
    <br>
    <div class="container text-left" id = 'MainDiv'>

    <div class="row"> 
        <div class="col-md-8 mx-auto jeb" style ="border-radius: 8px;">
            <br>
            <div class="card card-body mainBoxes">
                <p class = "lead"id="display-words"></p>
            </div>
            <br>
            <input autocapitalize = 'off' type="text" class="form-control form-control-lg"
            placeholder="Start Typing..." id="input" style='visibility: invisible' autofocus /> 
            <br>
            <h4 class="card card-body mainBoxes" id="status" style = 'padding:10px;'></h4>

            <!--Time, WPM, Errors-->
            <div class="row mt-5"> 
                <div class="col-md-4">
                    <div class="card card-body mainBoxes">
                            <h3> Time:
                                <span id="time">0</span>
                            </h3>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-body mainBoxes">
                            <h3> 
                                WPM:
                                <span id="wpm">0</span>
                            </h3>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-body mainBoxes">
                            <h3> 
                                Errors:
                                <span id="errors">0</span>
                            </h3>
                    </div>
                </div>

            </div>

            <!--Chart-->
            

            <!--Instructions-->
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card card-body mainBoxes">
                        <h5>Directions</h5>
                        <p class = "lead">Welcome to the SpeedyFingers Typing Test. Simply begin typing the above text and after 1 minute we will give you your wpm.
                        </p>
                        <p id = "log"></p>
                    </div>
                </div>
                <div class = "col-md-12" >
                    <br>
                    
                    <div class="card card-body mainBoxes" >
                        <h5>Your Performance</h5>
                        <div id="curve_chart" />
                        
                    </div>
                    <br>
                        <div> 
                            <p class = "lead" id = "statistics"></p>
                        </div>
                </div>
                    <br>
            </div>
        </div>
    </div>
    
<script src="js/wordsPerMinute3.31.js"></script>
</main>


<?php
    require "footer.php";
?>