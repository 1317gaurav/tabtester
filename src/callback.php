<?php
require_once('config.php');
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
}
$oAtuth = new Google_Service_Oauth2($client);
$user = $oAtuth->userinfo->get();

echo "<pre>";
print_r($user);


?>