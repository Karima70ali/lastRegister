<?php


//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '282532646316-i36n7ih10u2bbkhtsdgn5stgt0l9l88t.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'vEk5igGhoSquApNjgyoYww4D'; //Google client secret
$redirectURL = 'http://localhost/registerapp/public/user_register/home.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>