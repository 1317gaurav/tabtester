<?php
require_once('config.php');
session_start();
$client = new Google_Client();
$client->setAuthConfig('client_credentials.json');
$client->addScope(Google_Service_Oauth2::USERINFO_PROFILE);
$client->addScope(Google_Service_Oauth2::USERINFO_EMAIL);
$client->addScope(Google_Service_Oauth2::USERINFO_EMAIL);
$client->addScope(Google_Service_Oauth2::PLUS_ME);
$client->setRedirectUri("http://ps001.taboolasyndication.com:8999/feedback/Feedback/home.php");
$authUrl = $client->createAuthUrl();
header("location:".$authUrl);

//print_r($client);




?>
