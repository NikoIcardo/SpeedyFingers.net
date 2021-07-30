<?php
    require 'header.php';
?>
<header>
    <nav class="navbar navbar-default navbar-expand-lg navbar-light fixed-top jeb">
        <a class="logo"><img src="img\Logo\SF_logo_white1.png" height="50" width="66" id='Logo' /></a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item Nav"><a class="nav-link" href = "index.php">Typing Tests</a></li>
                <li class="nav-item Nav"><a class="nav-link" href = "profile.php">Your Profile</a></li>
                <li class="nav-item Nav"><a class="nav-link" href = "updates.php">Whats Coming!</a></li>
                <li class="nav-item active Nav"><a class="nav-link" href = "history.php">Story</a></li>
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
            <div class="card card-body mainBoxes">
                <h2>Speedy Fingers Story</h2>
                <br>
                <p class = "lead">We implemented php and a login system at version 2.0. Thats when this list was started (spoiler, the php login was already removed). We were on the web as July 2020, but you probably never heard of us.
                 We know you didn't actually, we only had one visitor, and guess who that was...You probably guessed it: The developer! Back then, we were just a small typing website
                (well, we kinda still are :^) ). We thought it would be neat to start listing the updates and the progress we have been making and you might be interested in reading through it too.
                If so, the updates are below! Enjoy!  
                </p>
            </div>
            <br>
        </div>
    </div>
    <br>
    <div class="row"> 
        <div class="col-md-8 mx-auto jeb" style ="border-radius: 8px;">
            <br>
            <div class="card card-body  mainBoxes">
                <h2>The Story of the Speedy Fingers Typing Test Website</h2>
                <br>
                <h3>7/29/2021</h3>
                <p>
                    The logo in the left hand side of the site has been updated to the logo that <a href="https://www.instagram.com/avesalexander/">Avery Alexander</a> designed for us! Thanks again Avery！
                </p>
                <br>
                <br>
                <h3>7/6/2021</h3>
                <p>
                    Hello all! If you were following our instagram, you would know that I've been recently been working on building a typing test with the 1000 most common words in the english language. 
                    These are words that you are going to type over and over again, so its good to practice them as much as possible. So go ahead and head on over to the word typing test under typing tests and check it out!  
                </p>
                <br>
                <br>
                <h3>7/4/2021</h3>
                <p>
                    First off, Happy 4th of July! 
                    <br> 
                    Secondly, we have now moved the texting test over to a new <a href="https://www.speedyfingers.net/Texting">page</a>. This is to optimize the experience for each test, on their respective devices.
                </p>
                <br>
                <br>
                <h3>7/3/2021</h3>
                <p>
                    We have once again decided to drastically change the way that our typing test works. We have received countless requests to change the way you input text. 
                    Thus we are now releasing a refined rendition of the typing test. You will now type letters without inputting them in a text box at all. The site will instead simply recognize typing from 
                    anywhere on the main typing tests pages and input the text. This makes focusing on the text and what you have typed much easier and will allow you to type without distraction. 
                    <br><br>
                    In addition to the new typing test features, we have also modified the main typing test pages to look a bit cleaner, including adding a new font. We have also deprecated a number of other pesky UI elements that 
                    we believe will create a cleaner design as a whole. 
                </p>
                <br>
                <br>
                <h3>7/2/2021</h3>
                <p>
                    Selecting a theme just got much easier. Go <a href = 'https://www.speedyfingers.net/profile.php#settings'>here</a> to check out the new theme editor!     
                </p>
                <br>
                <br>
                <h3>6/10/2021</h3>
                <p>
                    A dark mode has been added! Just head <a href = 'https://www.speedyfingers.net/profile.php#settings'>here</a> to change it! Also various other fixes were implemented.

                    <br><br>
                    More importantly we drastically changed how text is displayed and highlighted on the main typing test. The system is still subject to updates and refinement. However, this 
                    new style seems to be much preferable to the old one. Please let us know how you feel by messaging us on <a href="https://www.instagram.com/speedyfingerstyping/">instagram</a> or <a href="https://www.reddit.com/user/Nando9000/">reddit</a>!    
                </p>
                <br>
                <br>
                <h3>4/20/2021</h3>
                <p>
                   The site now tracks each character you miss and shows you your top ten most missed characters on the profile page. Use that list to see where you're struggling. Knowing 
                   where you need to improve can help you become a better typist! 
                </p>
                <br>
                <br>
                <h3>4/14/2021</h3>
                <p>
                    A longstanding issue plaguing the system we use to tell you how you made an error was finally resolved. It should, and emphasis on should, work flawlessly now. 
                    
                </p>
                <br>
                <h3>1/11/2021</h3>
                <p>
                    In leau of the Type to Read feature I mentioned in the Whats Coming page, I have added a new feature. This new feature isn't exactly type to read, but it does allow you to do 
                    just that if you choose! The new feature is the <a href = 'typeYourOwnText.php'> 'Type Your Own Text' </a> page! What the new pages comes with is a place to enter your own text to use in a 
                    typing test; You may copy and paste text from anywhere, then use it as a typing test!<br><br> You may also now type for multiple minutes if you choose! Just enter how many minutes you want to type for, and then
                    start the typing test as usual (honestly, you can type as long as you want)!<br><br> For you math nerds out there, the formula is (your entry) * 60 seconds. So, if you want to type for 1 and a half minutes 
                    you would simply enter 1.5, then the typing test would run for 90 seconds and then stop. Pretty neat huh!? The scores will average as your per minute score so if you type 600 words in 10 minutes, it will add an entry
                    to your <a href = 'profile.php'>profile stats</a> for 60 words per minute (the errors will average too)! If you like the feature and want to leave feedback, feel free to email us at 
                    <a href = "mailto : speedyfingerstypingtest@gmail.com" class = 'text-white'>SpeedyFingersTypingTest@gmail.com<a>.
                    
                </p>
                <br>
                <h3>12/15/2020</h3>
                <p>
                    You may now test how quickly you text by going to <a href = 'https://speedyfingers.net'>speedyfinger.net</a> while on your mobile devices! 
                </p>
                <br>
                <br>
                <h3>12/03/2020</h3>
                <p>
                    After some suggestions from professional designers, I overhauled the UI's central scheme improving readability across the site.  

                    <br><br>
                    I also added a variety of new content so start typing to explore it! 
                </p>
                <br>
                <h3>11/30/2020</h3>
                <p>
                    We added credit for <a href = 'wikipedia.com' >Wikipedia</a>, below in the footer, and added an IG link and the photographers' names that created the beautiful backgrounds we use on our site. If you appreciate the content,
                    that either have provided, you should support them. Donate to <a href = 'wikipedia.com' >Wikipedia</a>, or follow the photographers on <a href = 'instagram.com'>Instagram</a>. Their efforts are what allows us to have sites like the one you are on now :^). Think about it, 
                    you could be looking at a grey stock background typing content we came up with...(Dug the dog went under the table and sat under the chair and then brother John fed the dog lima beans without Father noticing.) As amusing as it may seem, 
                    <a href = 'wikipedia.com'>Wikipedia</a> really has better content.  <br><br>
                    We also restructured the profile page and added some more data to dig through. Let us know if you want more profile data, i.e. most commonly missed characters or other charts and whatever. We are data junkies and love 
                    looking at stats and statistics. We are also of the opinion that the more you know about your typing habits, the better you can improve!
                </p>
                <br>
                <h3>10/15/2020</h3>
                <p>
                    We added an integration with facebook so that you can boast your scores and challenge your friends through Zuckerberg's social network. It's currently barebones with just the ability
                    to share your score after typing. Planning for further integration in the future. 
                </p>
                <br>
                <h3>10/01/2020</h3>
                <p>
                    You know that fancy login system we talk about above? Yeah, we deprecated it. We implemented local storage instead that simply stores the information in your browser. 
                    So, just know that if you delete your cache and local storage for this site, it will delete your data. This method does have more benefits
                    than just providing an easy development path for our lazy developers though. We don't have to store any information for you, i.e. username or password. That means that 
                    you don't have to wake us up at 2:00 am knocking at our inbox to reset your password: you don't have a password or username at all! 
                    Your data is just stored on your machine and ready for you when you need it! This also means that there are 
                    no security leaks either, because we don't have a poorly secured internet box of hacker treasure containing your information! In our eyes, its a win-win situation!
                </p>
                <br>
                
                
            </div>
            <br>
        </div>
    </div>
</main>
<footer></footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
<?php
    require "footer.php";
?>