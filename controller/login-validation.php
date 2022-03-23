<?php
    session_start();

    // Connecting with the database
    require_once '../model/bd-connection.php';

    // Storing users data
    $username_user = $_POST['username'];
    $password_user = $_POST['password'];

    // Variables to control the autentication of the user
    $user_autenticated = false;
    $user_id = null;

    // Selecting the current user
    $query = "
        SELECT * FROM users where username = :username
        AND password = :password
    "; 

    $stmt = $connection->prepare($query);

    $stmt->bindValue(':username', $username_user);
    $stmt->bindValue(':password', $password_user);

    $stmt->execute(); 

    $user = $stmt->fetch();

    if (!empty($user)) {
        $user_autenticated = true; 
        $user_id = $user['id'];
    }else{
        header('Location: ../templates/login-register.php?login=Login Inválido');
    }

    if($user_autenticated){
        $_SESSION["autenticated"] = "YES";
        $_SESSION["id"] = $user_id;
        header('Location: ../templates/planner.php');
    }else {
        $_SESSION['autenticated'] = 'NO';
        header('Location: ../templates/login-register.php?login=Login Inválido');
    }
    
?>