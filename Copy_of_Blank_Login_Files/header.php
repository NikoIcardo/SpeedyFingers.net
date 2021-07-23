<?php
	session_start();
?>
<!DOCTYPE html> 
<html>
    <head>
    <meta charset = "utf-8">
	<meta name = "description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name = SpeedyFingers content = "width=device-width, initial-scale=1.0">
    <title>SpeedyFingers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
     integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous">
    </head> 
    <body>

        <header class = class = "bg-dark text-center p-3 mb-5">
            <nav class = "navbar navbar-default">
                <li><a href = "index.php">Home</a></li>
                <li><a href = "#">Portfolio</a></li>
                <li><a href = "#">About Me</a></li>
                <li><a href = "#">Contact</a></li>
            </nav>

            <div>
                <?php 
                    if(isset($_SESSION['userId']))
                    {
                        echo '<form action = "includes/logout.inc.php" method = "post">
                                <button type = "submit" name = "logout-submit" >Logout</button>
                            </form>';
                    }
                    else
                    {
                        echo '<form action = "includes/login.inc.php" method = "post">
                                <input type = "text" name = "mailuser" placeholder = "Username/E-mail...">
                                <input type = "password" name = "password" placeholder = "Password...">
                                <button type = "submit" name = "login-submit" >Login</button>
                            </form>
                            <a href = "signup.php">Signup</a>';
                    }
                ?>
            </div>
        </header>
