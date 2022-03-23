<?php 
    // Connecting with the database and getting current user
    require_once 'acess-validation.php';
    
    // Storing the id from the task to be deleted
    $task_id = $_GET['task_id'];

    try{
        // Deleting the task
        $query = "
            DELETE FROM tasks
            WHERE id = :id_task and id_user = :id_user
        "; 

        $stmt = $connection->prepare($query);

        $stmt->bindValue(':id_task', $task_id);
        $stmt->bindValue(':id_user', $user_id);

        $stmt->execute(); 
        
        header('Location: ../templates/planner.php');
    }catch(PDOException $e){
        $erro = 'Erro: '.$e->getMessage();
        
        echo '<pre>';
        print_r($e);
        echo '</pre>';

        header('Location: ../templates/planner.php?delete_task='.$erro); 
    }
?>