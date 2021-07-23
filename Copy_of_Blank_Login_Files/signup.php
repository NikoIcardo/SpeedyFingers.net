<?php  
    require "header.php";
?>


    <main>
        <h1> Signup <h1>
        <!-- check for errors -->
        <?php
            //check for errors
            if(isset($_GET['error']))
            {    if($_GET['error'] == "emptyfields")
                {
                    echo '<p> You have to type in each field!</p>';

                }
                else if($_GET['error'] == "invalidmailusername")
                {
                    echo '<p> Your username can only be letters and numbers and the email is not right either...!</p>';
                }
                else if($_GET['error'] == "invalidusername")
                {
                    echo '<p> Your username can only be letters and numbers sorry!</p>';
                }
                else if($_GET['error'] == "invalidemail")
                {
                    echo '<p> Thats not a real email...you cant test your typing skills until you get one!</p>';
                }
                else if($_GET['error'] == "passwordcheck")
                {
                    echo '<p> Hey, your passwords dont match, type them slowly this time (the only time you want to type slow)!</p>';
                }
                else if($_GET['error'] == "usertaken")
                {
                    echo '<p> That username has already been taken, thats okay, you can come up with something better!</p>';
                }
            }
            else if(isset($_GET['signup']) && $_GET['signup'] == "success")
            {
                echo '<p>You have created your account! Get ready to start your typing engine! Login above to start typing.</p>';
            }
        ?>
        <form action = "includes/signup.inc.php" method = "post">
            <input type = "text" name = "username" placeholder = "Username"> 
            <input type = "text" name = "mail" placeholder = "E-mail">
            <input type = "password" name = "password" placeholder = "Password"> 
            <input type = "password" name = "password-repeat" placeholder = "Repeat Password">  
            <button type = "submit" name = "signup-submit">Signup</button>
        </form>
    </main>