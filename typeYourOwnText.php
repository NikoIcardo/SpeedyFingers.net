<?php
    require "header.php";
?>
<header>
    <nav class="navbar navbar-default navbar-expand-lg navbar-light fixed-top jeb">
    <a class="mainBoxes logo" id = 'logo'>Speedy Fingers<br><small class = 'text-muted'> Typing Website</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item Nav active"><a class="nav-link" href = "index.php">Typing Tests</a></li>
                <li class="nav-item Nav"><a class="nav-link" href = "profile.php">Your Profile</a></li>
                <li class="nav-item Nav"><a class="nav-link" href = "updates.php">Whats Coming!</a></li>
                <li class="nav-item Nav"><a class="nav-link" href = "history.php">Story</a></li>
                </li>
            </ul>
            <div class="mainBoxes">
                <h3>&ensp;Follow us</h3>&ensp;<a href="https://www.instagram.com/_speedyfingers.net_/"><img src="./img/ig.png" style="width: 80px; height: 44px; border-radius: 10px;" /></a>&ensp;<a href="https://www.reddit.com/user/Nando9000/"><img src="./img/reddit.jpg" style="width: 44px; height: 44px; border-radius: 10px;" />&ensp;</a>
            </div>
        </div>
        
    </nav>
    <nav class="navbar navbar-default navbar-expand-lg navbar-light fixed-top jeb">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item Nav"><a class="nav-link" href = "index.php">Typing Test</a></li>
                <li class="nav-item Nav"><a class="nav-link" href = "typingtestwords.php">Most Common Word Test</a></li>
                <li class="nav-item Nav active"><a class="nav-link" href = "typeYourOwnText.php">Type Your Own Text</a></li>
                <li class="nav-item Nav"><a class="nav-link" href = "TextingTest.php">Texting Test (For Phones)</a></li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <br>
    <br>
    <div class="container text-left">
    
    <button class = 'btn btn1' id = 'button' onclick="hide()"> Hide </button>

    <!--Display and Input-->
    <div class="row"> 
        
        <div class="col-md-8 mx-auto jeb" id = 'Col1' style ="border-radius: 8px;">
            <br>
            <div class="card card-body mainBoxes">
                <h5>Saved Text</h5>
            </div>
            <br>
            <textarea  autocapitalize = 'off' class="form-control form-control-lg"
            placeholder = "Input Your Own Text Here!" id = "ownText"  rows = '5'></textarea>
            <br>
            <div class="card card-body mainBoxes">
                <h5>Type how many minutes you want to type below</h5>
            </div>
            <br>
            <textarea  autocapitalize = 'off' class="form-control form-control-lg"
            placeholder = "10, .5, 2.5, etc. Default is 1. " id = "minutes"  rows = '1'></textarea>
            <br><br>
        </div>

        <div class="col-md-8 mx-auto jeb" style ="border-radius: 8px;">
            <br>
            
            <div class="card card-body mainBoxes">
                <p class = "lead"id="display-words"></p>
            </div>
            <br>
            <p class="card card-body mainBoxes" id="status" style = 'padding:10px;'> Begin Typing When Ready...</p>
             
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
            

            <!--Instructions-->
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card card-body mainBoxes">
                        <h5>Directions</h5>
                        <p class = "lead">Welcome to the Type Your Own Text Typing Test. You can enter your own text in the entry area above. 
                            Then, after you have your own text, sourced from anywhere mind you, enter how many minutes you want to type for. Once you are 
                            ready, you can begin typing. The scores will add to your profile as usual averaged as your per minute score 
                            based on how many minutes you typed!
                        </p>
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
    
    
<script src="js/typeYourOwnText.js"></script>
<script> 
    let hidden = false;
    function hide (){
        if (hidden === false){
            hidden = true; 
            document.querySelector('#Col1').style.display = 'none'; 
            document.querySelector('#button').innerHTML = 'Un-hide'; 
        }else{
            hidden = false;
            document.querySelector('#Col1').style.display = 'inline'; 
            document.querySelector('#button').innerHTML = 'Hide';
        }
    }
</script>
</main>


<?php
    require "footer.php";
?>