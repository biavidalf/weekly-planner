<?php
    // Connecting with the database and getting current user
    require_once 'acess-validation.php';

    // Storing the week day selected by the user
    $week_day = $_POST['week'];
    $task = $_POST['task-text'];

    try{
        // Inserting the user into the database
        $query = '
            INSERT INTO tasks (task, week_day, id_user)
            VALUES (:task, :week_day, :id_user)
        ';

        $stmt = $connection->prepare($query);

        $stmt->bindValue(':task', $task);
        $stmt->bindValue(':week_day', $week_day);
        $stmt->bindValue(':id_user', $user_id);

        $stmt->execute();

        header('Location: ../templates/planner.php');
    }catch(PDOException $e){
        $erro = 'Erro: '.$e->getMessage();
        
        echo '<pre>';
        print_r($e);
        echo '</pre>';

        header('Location: ../templates/planner.php?add_task='.$erro); 
    }
?>