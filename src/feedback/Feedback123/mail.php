<?php
include '../connection.php';
session_start();


?>
<html>
<head>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Taboola ShoutOut</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css"></head>
</head>
</html>
<?php

$from=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];


$to=$_POST['email1'];
$cc=$_POST['email2'];
$msg=$_POST['msg'];
$_SESSION["msg"] = $msg;

$date=date("Y/m/d");

if ($msg == 'Collaboration') {
    $src="http://brahmarishisaubhari.com/images/c1.jpg";
} elseif ($msg == 'Humble') {
    $src="http://brahmarishisaubhari.com/images/h.jpg";
}
elseif ($msg == 'Assertive') {
    $src="http://brahmarishisaubhari.com/images/a.png";
}
elseif ($msg == 'Client Centricity') {
   $src="http://brahmarishisaubhari.com/images/cc1.jpg";
}
elseif ($msg == 'Empowering') {
    $src="http://brahmarishisaubhari.com/images/e.jpg";
}else{
    $src="http://brahmarishisaubhari.com/images/k.jpg";
}




$msg1=$_POST['msg1'];
$subject = "ShoutOut from $name ";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers .= "X-Priority: 3\r\n";
    $headers .= "Reply-To: The Sender <$name $from>\r\n"; 
    $headers .= "Return-Path: The Sender <$name $from >\r\n";
    $headers .= "From: $name <$name $from  $subject>\r\n"; 
    $headers .= "CC: <$cc>\r\n";     
    $headers .="X-Mailer: smail-PHP ".phpversion()."";
    
    
    
    
$toUser = strstr($to, '.', true);
$toUserName=ucfirst($toUser);

    
    

// $message = '<html>
// <body style="border-radius: 12px;"<br>';
     
     
// $message .= '<p style="color:#000;font-family:roboto;">&nbsp;&nbsp;&nbsp;Hi &nbsp;<span style="color:#216af3;">'.$toUserName.',</span><br>

//       <p style="color:#000;">&nbsp;&nbsp;&nbsp;You have received a shout Out from
//       <span style="color:#8e2e0b">'.$name.'</span>&nbsp;for exhibiting &nbsp;<span style="color:#114fa2;">'.$msg.'</span>&nbsp; as a quality recently.<br
//       </p>
//       </p>
      
//       <p style="color:#000;">&nbsp;&nbsp;&nbsp;<span style="color:; font-family:roboto;">You are appreciated for &nbsp;:</span><br>&nbsp;&nbsp;&nbsp;'.$msg1.'<br>
   
//       </p><br>
//       ';

// $message .= '</body></html>';



// $message = '<table align="center" border="1" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;" >

  
//     <tr>
    
//     <table border="1" cellpadding="0" cellspacing="0" width="100%">
//  <tr>
//   <td width="260" valign="top">
//   <table border="1" cellpadding="0" cellspacing="0" width="100%">
//     <tr>
     
//       <td width="50%" > <span style="color:#ff6b00;text-align:center;">'.$msg.',</span><br>
//      </td>
//     </tr>
//     <tr>
//      <td style="padding: 25px 0 0 0;">
//       Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.
//      </td>
//     </tr>
//   </table>
    
    
    
//       <td width="50%" > <span style="color:#ff6b00;text-align:center;">'.$msg.',</span><br>
//       <h2 style="color:#000;">
//       <span style="color:red; text-align: center;" >'.$msg.'</span>
      
//       </h2>
       
//       </h1>
//       <h2 style="color:#000;">&nbsp;&nbsp;&nbsp;<span style="color:#216af3; font-family:roboto;">You are appreciated for &nbsp;:</span><br>&nbsp;&nbsp;&nbsp;'.$msg1.'</h2></font>
//       </td>
//      </tr>
     
//   </table>

//   ';
//  $message = '
//  <table border="0" cellpadding="0" cellspacing="0" width="500" style="border-radius:24px; border-style: solid;border-color:#003399;">
//   <tr style="border-radius:24px;border-style: solid;border-color: #003399;">
//   <td style="border-radius:24px;border-style: solid;border-color: #003399;">
    
    
//     <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-radius:24px;border-style: solid;border-color: #003399;">
//  <tr style="border-radius:24px;border-style: solid;border-color: #003399; border-top-right-radius: 24px;border-top-left-radius: 24px;">
//  <td align="center" bgcolor="#003399" style="padding: 40px 0 30px 0; color:#fff;font-family:Helvetica; font-size:30px;
//  font-weight:600; border-top-right-radius: 24px;border-top-left-radius: 24px;border-style: solid;border-color: #003399;">
// &#127881; Taboola ShoutOut &#127881;
				
// </td>
//  </tr>
//  <tr>
//   <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;border-style: solid;border-color: #003399;">
//  <table border="0" cellpadding="0" cellspacing="0" width="600px">
//  <tr>
//   <td align="center">
//   <span style="color:#003399; font-size:16px; font-weight:400;">'.$msg.'</span>
//   </td>
//  </tr>
//  <tr>
//   <td style="padding: 20px 0 30px 0;border-color: #003399; color:#888;">
//  '.$msg1.'
//   </td>
//  </tr>

// </table>
// </td>
//  </tr>
//  <tr border-bottom-right-radius: 24px;border-bottom-left-radius: 24px;>
//   <td bgcolor="#003399" style="padding: 30px 30px 30px 30px; border-bottom-right-radius: 24px;border-bottom-left-radius: 24px;border-style: solid;border-color: #003399;" align="center">
// <span style="color:#fff; font-family:Helvetica;">Hearty in your approbation and be lavish in your praise</span>
// </td>
//  </tr>
// </table>
// </td>
//  </tr>
// </table>
    
 
//  ';


 $message = '
 <div style="width:700px; height:700px; padding:20px; text-align:center; border: 10px solid #003399;">
<div style="width:650px; height:650px; padding:20px; text-align:center; border: 5px solid #003399">
       <span style="font-size:50px; font-weight:bold">Certificate of Appreciation</span>
       <br><br>
       <span style="font-size:20px"><i>Awarded to</i></span>
       <br><br>
       <span style="font-size:25px;color:#003399;"><b>'.$toUserName.'</b></span><br/><br/>
       <span style="font-size:20px"><i>You have received a shout Out from<b> '.$name.'</b> for exhibiting <b>'.$msg.'</b> as a quality.
</i></span> <br/><br/>
       <span style="font-size:20px"><b>Comment</b>:&nbsp;'.$msg1.' <br/><br/><br/></span> 
        <span style="font-size:20px"><b>Thank you for your dedication and commitment.</b><br/><br/></span> 
       <span style="font-size:18px; color"><i>&nbsp;'.date("Y/m/d").'</i></span><br>
     
</div>
</div>
    
 
 ';
  





 
$domain = strstr($to, '@');
$domain1="@taboola.com";

if($domain == $domain1)
{
    mail("$to", $subject, $message, $headers);
  
      $sql = "INSERT INTO `sent` (`sno`, `to`,`cc`, `a`, `a1`, `date`, `from`, `fname`, `dateu`) VALUES (NULL, '$to','$cc', '$msg', '$msg1', CURRENT_TIMESTAMP, '$from','$name','$date');";
if(mysqli_query($db, $sql)){
echo '<script>
    setTimeout(function() {
        swal({
            title: "Success",
            text: "Thanks for appreciating your colleagues",
            type: "success"
        }, function() {
            window.location = "user.php";
        });
    }, 600);
</script>';
//    header("Location: login.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
// Close connection
mysqli_close($db);
}
else{
       echo '<script>
    setTimeout(function() {
        swal({
            title: "Warning",
            text: "Please use correct email",
            type: "error"
        }, function() {
            window.location = "user.php";
        });
    }, 600);
</script>';
}

?>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  
    
    </html>