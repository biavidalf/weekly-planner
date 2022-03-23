<!-- 
    ================= LOGIN | REGISTER =================
 -->
<?php
    require_once 'navegation.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LOGIN - REGISTER | Weekly Planner</title>
        <link rel="stylesheet" href="../static/css/style.css">
    </head>

    <body>
        <div class="marker">USER PAGE</div>

        <!-- LOGIN FORM -->
        <div id="login-register">
            <div class="container">
                <h3 style="width:100px">LOGIN</h3>
                <form action="../controller/login-validation.php" method="POST">
                    <input type="text" class="form-geral" name="username" placeholder="Username">

                    <input type="password" class="form-geral" name="password" placeholder="Password">

                    <!-- Verify login errors -->
                    <?php
                        if (isset($_GET['login'])) {
                            if ($_GET['login'] == 'user_not_logged_in'){
                                echo '<span style="color:red">Faça o login primeiro!<br></span>';
                            }else {
                                echo '<span style="color:red">'. $_GET['login'] .'<br></span>';
                            }
                        }
                    ?>
                    <input type="submit" class="botao" value="ENTRAR">
                </form>
            </div> <!-- /end login form -->
            
            <!-- REGISTER FORM -->
            <div class="container">
                <h3>REGISTER</h3>
                <form action="../controller/register-validation.php" enctype="multipart/form-data" method="POST">
                    <input type="text" class="form-geral" name="username" placeholder="Username" required>
                    
                    <input type="text" class="form-geral" name="full-name" placeholder="Full Name" required>
                    
                    <label class="profile" for="profile-pic">Foto de perfil</label>
                    <input type="file" name="profile-pic" id="profile-pic" value="" accept=".jpg, .png, .jpeg" required>

                    <input type="password" class="form-geral" name="password" placeholder="Password" required>
                    
                    <!-- Verify register errors -->
                    <?php 
                        if (isset($_GET['register'])){
                            echo '<span style="color:red"><br>Register: '. $_GET['register'] .'<br></span>';
                        }
                    ?>
                    <input type="submit" class="botao" value="CADASTRAR">
                </form>
            </div><!-- /end register form -->
 
        </div> <!-- /end login-register -->
        
        <?php
            include_once 'footer.php';
        ?>
    </body>
</html>