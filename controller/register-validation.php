<?php
    // Connecting with the database
    require_once '../model/bd-connection.php';

    // Variables to control the autentication of the user
    $user_autenticated = false;
    $user_id = null;
    
    // Storing users data
    $username_user = $_POST['username'];
    $name_user = $_POST['full-name'];
    $password_user = $_POST['password'];

    // Profile Pic validation
    $extensions = array("png", "jpeg", "jpg");

    $extension = pathinfo($_FILES['profile-pic']['name'], PATHINFO_EXTENSION);

    if(in_array($extension, $extensions)){
        // Setting the profile pics directory and temporary name of the file
        $dir = "profile-pics-users/";
        $temp = $_FILES['profile-pic']['tmp_name'];

        // Changing the file name
        $profile_pic_user = uniqid().".$extension"; //Ex: 14956123.png

        // Trying to move the file to the profile pics directory
        // profile-pics-users/ + 14956123.png -> file location
        if(move_uploaded_file($temp, $dir.$profile_pic_user)){
            try{
                // Inserting the user into the database
                $query = '
                    INSERT INTO users (username, full_name, profile_pic, password)
                    VALUES (:username, :full_name, :profile_pic, :password)
                ';

                $stmt = $connection->prepare($query);

                /* Preparing the data typed by the user to avoid SQL injections */
                $stmt->bindValue(':username', $username_user);
                $stmt->bindValue(':full_name', $name_user);
                $stmt->bindValue(':profile_pic', $profile_pic_user);
                $stmt->bindValue(':password', $password_user);

                $stmt->execute();

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
                    header('Location: ../templates/login-register.php?login=User not allowed');
                }
            
                if($user_autenticated){
                    $_SESSION["autenticated"] = "YES";
                    $_SESSION["id"] = $user_id;
                    header('Location: ../templates/planner.php');
                }else {
                    $_SESSION['autenticated'] = 'NO';
                    header('Location: ../templates/login-register.php?login=User not allowed');
                }
                /* $_SESSION['autenticated'] = "YES";
                $_SESSION['id'] = $user['id'];

                header('Location: ../templates/planner.php'); */
            }catch(PDOException $e){
                $erro = 'Erro: '.$e->getMessage();
                
                echo '<pre>';
                print_r($e);
                echo '</pre>';
        
                header('Location: ../templates/login-register.php?register='.$erro); 
            }
        }else{
            header('Location: ../templates/login-register.php?register=Upload Fail');
        }
    }else {
        header('Location: ../templates/login-register.php?register=Format not allowed');  
    }
    echo '<br><br><hr><pre>';
    print_r($_FILES);
    echo '</pre>';
?>