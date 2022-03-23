<?php
  /* Verify if any user is logged in */
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  require_once '../model/bd-connection.php';

  if (!isset($_SESSION['autenticated']) || $_SESSION['autenticated'] != 'YES') {
    header('Location: ../templates/login-register.php?login=user_not_logged_in');
  }else{
        // Select current user
        $query = "
        SELECT * FROM users where id = :identify
        "; 
    
        $stmt = $connection->prepare($query);
    
        $stmt->bindValue(':identify', $_SESSION['id']);
    
        $stmt->execute(); 
    
        $user = $stmt->fetch(); 
        
        /* Makes getting the current user in other pages easier */
        $user_id = $user['id'];
  }
?>