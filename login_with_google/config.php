<?php

    require_once 'vendor/autoload.php';

    
    $google_client = new Google_Client();
    $google_client->setClientId('335087550416-dgpiphj6535c78b05vosh75olqiom0v3.apps.googleusercontent.com');
    $google_client->setClientSecret('NO7G2iA4iAA7ctKXLx2PscjH');
    $google_client->setRedirectUri('http://localhost/Login_System/index.php');
    $google_client->addScope('email');
    $google_client->addScope('profile');
    session_start();

?>
