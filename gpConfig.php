<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '591592038455-6k4scpmfbg8jelfep8ulbvs6qhv5prm4.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'jxk_KJ4MGM0Oj2MrnJdWqk74'; //Google client secret
$redirectURL = 'http://localhost/yatri'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>