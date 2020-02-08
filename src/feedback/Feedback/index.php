<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css"></head>
    
<?php
require_once '../googleApi/vendor/autoload.php';
 
// init configuration
$clientID = '592478387109-6va631t02q33fn7h8cik8tm6dib1f7pa.apps.googleusercontent.com';
$clientSecret = '1DsOX3JydOKxzcwP1tN0Orq-';
$redirectUri = 'http://ps001.taboolasyndication.com:8999/feedback/Feedback/index.php';
  
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
 
// authenticate code from Google OAuth Flow
if(isset($_SESSION['access_token']))
{
    $client->setAccessToken($_SESSION['access_token']);
    
}
else if(isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
//   $client->setAccessToken($token['access_token']);
  $_SESSION['access_token'] = $token;
  
  
  // get profile info
//   $google_oauth = new Google_Service_Oauth2($client);
//   $google_account_info = $google_oauth->userinfo->get();
//   $email =  $google_account_info->email;
//   $name =  $google_account_info->name;
  
  
  

 
  // now you can use this profile info to create account in your website and make user logged in.
}
else{
    
    header("location:../google/index.php");
}


$oAtuth = new Google_Service_Oauth2($client);
$user = $oAtuth->userinfo->get();

$userData['name'] = $user->name;
$userData['gender'] = $user->gender;
$userData['pageLink'] = $user->link;
$userData['picture'] = $user->picture;
$userData['email'] = $user->email;
$userData['hd'] = $user->hd;
$_SESSION['user'] =$userData;


$from=$_SESSION['user']['email'];
$domain = strstr($from, '@');
$domain1="@taboola.com";

if($domain == $domain1)
{
    ?>
    <script>
        window.location="home.php";
        </script>
    <?php
}
    elseif($from == 'gaurav.k@taboola.com')
{
    ?>
    <script>
        window.location="userAdmin.php";
        </script>
    <?php
}   
else{
    echo '<script>
    setTimeout(function() {
        swal({
            title: "Warning",
            text: "You are not authorised to login",
            type: "error"
        }, function() {
            window.location = "logout.php";
        });
    }, 600);
</script>';
}

?>


<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  
    
    </html>
