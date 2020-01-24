<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css"></head>
    
<?php


        $from=$_SESSION['user']['email'];
		
		$to=$_POST['email1'];
		$msg=$_POST['msg'];
		$msg1=$_POST['msg1'];
		
$subject = "Feedback from you team";
$message = "Something I really appreciate about you is….\n".$msg."\nCan I share with you a bit of feedback \n".$msg1."";

// Always set content-type when sending HTML email
//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $headers .= "Organization: Taboola\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

$message = '<html><body>';
$message .= '<h1>Hello, World!</h1>';
$message .= '</body></html>';



// More headers
$headers="From: ".$from. "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
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


?>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  
    
    </html>