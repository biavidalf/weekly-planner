<?php 
    // Creating variables to connect with the database
    $dsn = 'mysql:host=127.0.0.1:3312;dbname=db_planner';
    $user = 'root';
    $password = '';

    $connection = new PDO($dsn, $user, $password);
?>