<!-- 
    ================= LOGOUT CODE (destroing the session) =================
 -->
<?php
    session_start();
    session_destroy();
    header('Location: login-register.php');
?>