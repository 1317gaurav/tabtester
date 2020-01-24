<?php   
session_start(); //to ensure you are using same session
unset($_SESSION);
session_destroy(); //destroy the session
header("location:../../google/"); //to redirect back to "index.php" after logging out
exit();
?>