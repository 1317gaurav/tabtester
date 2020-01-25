<?php   
session_start(); //to ensure you are using same session
unset($_SESSION);
session_destroy(); //destroy the session
?>

<script>
        window.location="../../src/";
        </script>

<?php
exit();
?>
