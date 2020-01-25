<?php   
session_start(); //to ensure you are using same session
unset($_SESSION);
session_destroy(); //destroy the session
?>

<script>
        window.location="../../index.html";
        </script>

<?php
exit();
?>
