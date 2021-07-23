<?php
    require "header.php";
?>
<header>
    <nav class="navbar navbar-default navbar-expand-lg navbar-light fixed-top jeb">
        <a class="navbar-brand mainBoxes display-1 text-white lead" style = 'padding:4px;'>Speedy Fingers<br><small class = 'text-muted'> Typing Website</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active Nav"><a class="nav-link text-white" href = "index.php">Type</a></li>
                <li class="nav-item Nav"><a class="nav-link text-white" href = "profile.php">Your Profile</a></li>
                <li class="nav-item Nav"><a class="nav-link text-white" href = "updateLog.php">Whats Coming!</a></li>
                <li class="nav-item Nav"><a class="nav-link text-white" href = "history.php">History</a></li>
                </li>
            </ul>
        </div>
        
    </nav>
</header>
<main>
    <br>
    <br>
    <div class="container text-left text-white">

    <!--Display and Input-->
    <div class="row"> 
        <div class="col-md-6 mx-auto jeb" style ="border-radius: 8px;">
            <br>
            <div class="card card-body mainBoxes">
                <p class = "lead"id="current-words"></p>
            </div>
            <br>

            <input type="text" class="form-control form-control-lg"
            placeholder="Start Typing..." id="word-input" autofocus> 
            <h4 class="mt-3" id="message" style = 'text-shadow: 1px 1px  1px white'></h4>

            <!--Time, WPM, Errors-->
            <div class="row mt-5 text-white mainBoxes" style = 'margin:7px;'> 
                <div class="col-md">
                    <h3> Time:
                        <span id="time">0</span>
                    </h3>
                </div>
                
                <div class="col-md">
                    <h3>WPM:
                        <span id="score">0</span>
                    </h3>
                </div>

                <div class="col-md">
                    <h3>Errors:
                        <span id="errors">0</span>
                    </h3>
                </div>
            </div>

            <!--Chart-->
            

            <!--Instructions-->
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card card-body mainBoxes">
                        <h5>Instructions</h5>
                        <p class = "lead">Welcome to the SpeedyFingers Typing and Type Test Website. Type the highlighted word and then a space to move onto the next word.
                            You have sixty seconds! Try to type as many words as possible! </p>
                        <p id = "log"></p>
                    </div>
                </div>
                <div class = "col-md-12" >
                    <br>
                    
                    <div class="card card-body mainBoxes" >
                        <h5>Your Performance</h5>
                        <div id="curve_chart"/>
                        
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
    
<script src="js/wordsPerMinute3.2.js"></script>
</main>


<?php
    require "footer.php";
?>