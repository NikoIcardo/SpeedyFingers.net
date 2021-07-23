<?php
include 'indexlogindemo.php';
session_destroy(); 
unset($_SESSION['access_token']); 
header("Location:indexlogindemo.php");