<?php 
    // Connecting with the database and getting current user
    require_once 'acess-validation.php';
    
    // Storing the id and the text from the task to be edited
    $task_id = $_POST['task_id'];
    $rewriten_task = $_POST['task'];

    try{
        // Editing the task
        $query = "
            UPDATE  tasks 
            SET task= :task  
            WHERE id = :id_task and id_user = :id_user
        "; 

        $stmt = $connection->prepare($query);

        $stmt->bindValue(':id_task', $task_id);
        $stmt->bindValue(':id_user', $user_id);
        $stmt->bindValue(':task', $rewriten_task);

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