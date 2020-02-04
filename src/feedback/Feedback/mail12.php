<?php
session_start();
?>

    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Taboola ShoutOut</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css"></head>

<?php

$from=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];

$subject1=$_POST['subject'];
$feedback=$_POST['feedback'];
$to='gaurav.k@taboola.com';
$cc='sudip.c@taboola.com';

$subject = "You have received a suggestion from $name";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers .= "X-Priority: 3\r\n";
    $headers .= "Reply-To: The Sender <$name $from>\r\n"; 
    $headers .= "Return-Path: The Sender <$name $from >\r\n";
    $headers .= "From: $name <$name $from  $subject>\r\n"; 
    $headers .= "CC: <$cc>\r\n";     
    $headers .="X-Mailer: smail-PHP ".phpversion()."";
    
    
    


    
    
     
$message .= '<p style="color:#000;font-family:roboto;">&nbsp;&nbsp;&nbsp;<b>Subject</b>&nbsp;:&nbsp;<span style="color:#216af3;">'.$subject1.',</span><br>

      <p style="color:#000;">&nbsp;&nbsp;&nbsp;<b>Suggestion</b> &nbsp;:&nbsp;
      <span style="color:#8e2e0b">'.$feedback.'</span>
      </p>
      </p>
      
     
   
      </p><br>
 
 ';
  

mail($to, $subject, $message, $headers);
  
echo '<script>
    setTimeout(function() {
        swal({
            title: "Success",
            text: "Thanks for your suggestion !",
            type: "success"
        }, function() {
            window.location = "feedback.php";
        });
    }, 600);
</script>';


?>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  
    
    </html>
