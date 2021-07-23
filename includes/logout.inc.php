<?php

session_start();    // ensures a session is running to grab the session variables. 
session_unset(); // deletes all values of session variables
session_destroy(); // destroys all session variables    
header('Location:../index.php');    // sends us back to the login page