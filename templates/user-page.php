<!-- 
    ================= USER PAGE =================
 -->
<?php
    include_once 'navegation.php';
    include '../controller/tasks.php';

    /* Page for users only */
    include '../controller/acess-validation.php'
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>USER PROFILE | Weekly Planner</title>
    </head>

    <body>
        <div class="marker">USER PAGE</div>

        <div id="logout">
            <div class="container">
                <!-- Users info -->
                <img src="../controller/profile-pics-users/<?php echo $user['profile_pic'] ?>" alt="profile-pic" class="profile-pic">
                <h2><?php echo $user['full_name'] ?></h2>
                <ul>
                    <li><i class="fas fa-id-card"></i><?php echo $user['username'] ?></li>
                    <li><i class="fas fa-pencil-alt"></i><?php echo $number_active_tasks ?> tasks ativas</li>
                </ul>

                <!-- LOGOUT button -->
                <a href="logout.php"><input type="button" class="botao" value="LOGOUT"></a>
            </div>

 
        </div> <!-- /end logout -->

        <?php
            include_once 'footer.php';
        ?>
    </body>
</html>