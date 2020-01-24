<?php
require_once('googleApi/vendor/autoload.php');
session_start();
$client = new Google_Client();
$client->setAuthConfig('client_credentials.json');
// $client->addScope(Google_Service_Oauth2::USERINFO_PROFILE);
// $client->addScope(Google_Service_Oauth2::USERINFO_EMAIL);
// $client->addScope(Google_Service_Oauth2::USERINFO_EMAIL);
// $client->addScope(Google_Service_Oauth2::PLUS_ME);
$client->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");	
$client->setRedirectUri("http://brahmarishisaubhari.com/feedback/");

?>