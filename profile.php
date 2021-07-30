<?php
require 'header.php';
?>
<header>
    <nav class="navbar navbar-default navbar-expand-lg navbar-light fixed-top jeb">
        <a class="logo"><img src="img\Logo\SF_logo_white1.png" height="50" width="66" id='Logo'/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item Nav"><a class="nav-link" href="index.php">Typing Tests</a></li>
                <li class="nav-item active Nav"><a class="nav-link" href="profile.php">Your Profile</a></li>
                <li class="nav-item Nav"><a class="nav-link" href="updates.php">Whats Coming!</a></li>
                <li class="nav-item Nav"><a class="nav-link" href="history.php">Story</a></li>
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
            <div class="col-md-8 mx-auto jeb" style="border-radius: 8px;">
                <br>
                <div class="card card-body mainBoxes">
                    <h2 id="NameDisplay">Welcome!</h2>
                </div>
                <br>
            </div>
        </div>
        <br>




        <!-- Chart-->
        <div class="row justify-content-center">

            <!-- Main Column 1-->
            <!-- Chart 1-->
            <div class="col-md-8 mx-auto jeb" style="border-radius: 8px;">
                <br>
                <div class="card card-body mainBoxes" id='Chart'>
                </div>
                <br>

            </div>

        </div>
        <br><br>
        <!-- Chart 2-->
        <div class="row justify-content-center">

            <div class="col-md-8 mx-auto jeb" style="border-radius: 8px;">
                <br>
                <div class="card card-body mainBoxes" id='Chart2'>
                </div>
                <br>

            </div>

        </div>
        <br><br>

        <!-- main -->
        <div class="row justify-content-center ">

            <!-- Main Column 1-->
            <div class="col-md-4 jeb" style="border-radius: 8px; margin-right:5px;">
                <br>
                <div id="DATA1" class=' card card-body mainBoxes'></div>
                <br>
            </div>
            <!-- Main Column 2 -->
            <div class="col-md-4 jeb" style="border-radius: 8px; margin-left:5px;">
                <br>
                <div id="DATA2" class=' card card-body mainBoxes'></div>
                <br>
            </div>

        </div>
        <br>
        <br>

        <div class="row">
            <div class="col-md-8 mx-auto jeb" style="border-radius: 8px;">
                <br>
                <div class="card card-body mainBoxes">
                    <h2 id='settings'>Settings</h2>
                    <p>If this is your first time here, read this!
                        <br><br>
                        These settings are available to let you create a customized environment that helps you type better.
                        You can change the text color, the background image to a solid color, the box colors, and the highlighter color
                        in the actual typing test.
                        <br><br>
                        For the color settings below, either pick a theme or dig into the custom settings!
                        For those settings, just click the color bar, select a color, then click outside of the box. To reset the theme, click on the dark or light theme above!
                        <br><br>
                        After setting up your profile, you may click <a href='index.php'>here</a> to start your first typing test. Once you have done a few of them, come back to the profile page to help
                        you analyze your typing with the statistics above so you can know what you need to work on to improve!
                    </p>
                </div>
                <br>
                <div class="card card-body mainBoxes">
                    <h5>User Name</h5>
                    <br>
                    <input type="text" class="form-control form-control-lg" placeholder="Type Your Witty Username Here!" id="GetName">
                    <br>
                    <br>
                    <h5>Themes</h5>
                    <button type="button" class="btn btn-dark" onclick="setDarkMode()"> Dark Mode</button>
                    <button type="button" class="btn btn-light" onclick="setLightMode()"> Light Mode</button>
                    <br>
                    <h5>Logo Color</h5>
                    <br>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="GetLogoColor">
                        <label class="custom-control-label" for="GetLogoColor" id="LogoColorWrite"></label>
                    </div>
                    <br>
                    <h5>Text Color</h5>
                    <br>
                    <input type="color" class="form-control form-control-lg" id="GetTextColor">
                    <br>
                    <h5>Box Color</h5>
                    <br>
                    <input type="color" class="form-control form-control-lg" id="GetBoxColor">
                    <br>
                    <h5>Background Color</h5>
                    <br>
                    <input type="color" class="form-control form-control-lg" id="GetBGColor">
                    <br>
                    <h5>Typing Test Highlight Color</h5>
                    <br>
                    <input type="color" class="form-control form-control-lg" id="GetHighlight">
                    <br>
                </div>
                <br>
            </div>
        </div>
</main>
<footer></footer>
<script src="js/profile.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<?php
require "footer.php";
?>