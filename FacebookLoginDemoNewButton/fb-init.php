<?php
//start the session 

//include autoload file from vendor folder
require '../vendor/autoload.php';

$fb = new Facebook\Facebook([
    'app_id' => '287533052586926', 
    'app_secret' => '3fc00f67c04e719a9ce35e206e2ba0c8', 
    'default_graph_version' => 'v7.0'
]);

$helper = $fb->getRedirectLoginHelper(); 
$login_url = $helper->getLoginUrl("https://speedyfingers.net/");


try {

   $accessToken = $helper->getAccessToken(); 
   if(isset($accessToken)){
       $_SESSION['access_token'] = (string)$accessToken; //convert to string
       //if session is set we can redirect the user to any page
       header('indexlogindemo.php');
   }

} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

//now we will get users first name, email, last naem 
if(isset($_SESSION['access_token'])){
    try {
        $fb->setDefaultAccessToken($_SESSION['access_token']));
        $fb->get('/me?locale=en_US&fields=name,email');
        $user = $res->getGraphUser();
        echo $user->getField('name');

     } catch (Exception $exc) {
         echo $exc->getTraceAsString();
     }
}
