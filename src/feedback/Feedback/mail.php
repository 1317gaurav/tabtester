<?php
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

$msg1=$_POST['msg1'];
$subject = "ShoutOut from $name ";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers .= "X-Priority: 3\r\n";
    $headers .= "Reply-To: The Sender <$from>\r\n"; 
    $headers .= "Return-Path: The Sender <$name $from >\r\n";
    $headers .= "From: $name <$from>\r\n"; 
    $headers .= "CC: <$cc>\r\n";     
    $headers .="X-Mailer: smail-PHP ".phpversion()."";
    
    
    
    
$toUser = strstr($to, '.', true);
$toUserName=ucfirst($toUser);   
    

 $message = '
 <div style="width:700px; height:738px; padding:20px; text-align:center; border: 10px solid #003399;">
<div style="width:650px; height:688px; padding:20px; text-align:center; border: 5px solid #003399">
       <span style="font-size:35px; font-weight:600">Certificate of Appreciation</span>
       <br><br>
       <span style="font-size:20px"><i>Awarded to</i></span>
       <br><br>
       <span style="font-size:25px;color:#003399;"><b>'.$toUserName.'</b></span><br/><br/>
       <span style="font-size:18px"><i>You have received a shout Out from<b> '.$name.'</b> for exhibiting <b>'.$msg.'</b> as a quality.
</i></span> <br/><br/>
      <span><img src="http://brahmarishisaubhari.com/feedback/Feedback/assets/img/logo.png"/></span> <br/><br/>
       <span style="font-size:18px"><b>Comment</b>:&nbsp;'.$msg1.'</span><br/><br/>
       <span style="font-size:16px"><b>Thank you for your dedication and commitment.</b><br/><br/></span> 
       <span style="font-size:18px; color"><i>&nbsp;'.date("Y/m/d").'</i></span><br>
</div>
</div>
    
 
 ';
  
$domain = strstr($to, '@');
$domain1="@taboola.com";

if($domain == $domain1)
{
 mail($to, $subject, $message, $headers);
 $message = '';  
 $error = '';  
  
    
     
$dateTime=date("M,d,Y h:i:s A");
     
     
                $current_data = file_get_contents('users.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     
                    
                     'date'     =>     $dateTime,
                     'to'          =>     $to,  
                     'manager'     =>     $cc,
                    'from'     =>     $from,
                    'fname'     =>     $name,
                    'message'     =>     $msg,
                    'description'     =>     $msg1,
                    'pread'     =>     0,
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('users.json', $final_data))  
                {  
                    //  $message = "<label class='text-success'>File Appended Success fully</p>";  
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
                }  

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
