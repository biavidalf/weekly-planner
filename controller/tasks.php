<?php
    // Connecting with the database and getting current user
    require_once 'acess-validation.php';

      // Storing all the tasks from the current user
      $query = "
        SELECT * FROM tasks where id_user = :user_id
      "; 

      $stmt = $connection->prepare($query);

      $stmt->bindValue(':user_id', $user_id);

      $stmt->execute(); 

      $tasks = $stmt->fetchAll(); 

      // Makes get the tasks from the user easier
      $number_active_tasks = 0;    
      foreach($tasks as $task){
          ++$number_active_tasks; /* Users page count */
      }
?>