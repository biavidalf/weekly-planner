<!-- 
    ================= MAIN NAVEGATION =================
 -->
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Main CSS -->
        <link rel="stylesheet" href="../static/css/style.css">

        <!-- Normalize CSS -->
        <link rel="stylesheet" href="../static/css/normalize.css">

        <!--[if lt IE 9]>
	        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
        <![endif]-->

        <!-- ICONS -->
        <script src="https://kit.fontawesome.com/cb18e7956b.js" crossorigin="anonymous"></script>

        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Atma:wght@400;600&display=swap" rel="stylesheet">
    </head>

    <body>
        <nav> <!-- Nav Bar -->
            <a href="../templates/index.php"><span class="name">Weekly Planner</span></a>

            <a href="../templates/planner.php" title="Weekly Planner" class="icons"><i class="fas fa-list-ul"></i></a>
            
            <!-- 
                Checking if the user is logged in 
                if yes, user icon is for User Page | Logout
                if no, user icon is for Login | Register
            -->
            <?php
                if (!isset($_SESSION['autenticated']) || $_SESSION['autenticated'] != 'YES'){
            ?>
                    <a href="../templates/login-register.php" title="Login | Register" class="icons"><i class="fas fa-user"></i></a>
            <?php
                }else{
            ?>
                    <a href="../templates/user-page.php" title="User page | Logout" class="icons"><i class="fas fa-user"></i></a>
            <?php 
                } 
            ?>

            <a href="../templates/index.php" title="Home" class="icons"><i class="fas fa-home"></i></a>
        </nav> <!-- /end nav bar -->
    </body>
</html>