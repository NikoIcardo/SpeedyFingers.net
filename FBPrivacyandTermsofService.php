<?php
    require 'header.php';
?>
<header>
    <nav class="navbar navbar-default navbar-expand-lg navbar-light fixed-top jeb">
        <a class="mainBoxes logo" id = 'logo'>Speedy Fingers<br><small class = 'text-muted'> Typing Website</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item Nav"><a class="nav-link " href = "index.php">Typing Tests</a></li>
                <li class="nav-item Nav"><a class="nav-link " href = "profile.php">Your Profile</a></li>
                <li class="nav-item Nav"><a class="nav-link " href = "updates.php">Whats Coming!</a></li>
                <li class="nav-item Nav"><a class="nav-link " href = "history.php">Story</a></li>
                </li>
            </ul>
            <div class="mainBoxes">
                <h3>&ensp;Follow us</h3>&ensp;<a href="https://www.instagram.com/_speedyfingers.net_/"><img src="./img/ig.png" style="width: 80px; height: 44px; border-radius: 10px;" /></a>&ensp;<a href="https://www.reddit.com/user/Nando9000/"><img src="./img/reddit.jpg" style="width: 44px; height: 44px; border-radius: 10px;" />&ensp;</a>
            </div>
        </div>
    </nav>
</header>

<main>
    <br>
    <br>
    <br>
    <div class="container text-left">

    <!--Display and Input-->
    <div class="row"> 
        <div class="col-md-8 mx-auto jeb" style ="border-radius: 8px;">
            <br>
            <div class="card card-body  mainBoxes">
                <h2>Terms of Service and Facebook Privacy Policy</h2>
                <br>

                <p>
                    For terms of service, there are essentially none. You may use this site to type, test your typing and share your scores with your friends, as you may expect. <br><br>
                    For those of you who wish to know the exact use of your facebook login for this site read along. 
                    <br><br>
                    We currently only use a facebook plugin that allows you to login in order to share your score. That is initiated via 
                    the facebook share button that is displayed after you do a typing test. We do not store your login information or any other data related to facebook 
                    in any sort of database or any other capacity. We also do not share or send this information to any other party or view it while you are logged in either. 
                    We never process it to any extent at the moment. 
                    <br><br>
                    
                    If you have any questions, please email them to <a href = "mailto : speedyfingerstypingtest@gmail.com" class = 'text-white'>SpeedyFingersTypingTest@gmail.com<a>. 
                </p>
            </div>
            <br>
        </div>
    </div>
    <br>
</main>
<footer></footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
<?php
    require "footer.php";
?>