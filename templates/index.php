<!-- 
    ================= HOME PAGE (INDEX) =================
 -->
 <?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Main CSS -->
        <link rel="stylesheet" href="../static/css/homepage.css">

        <!-- Normalize CSS -->
        <link rel="stylesheet" href="../static/css/normalize.css">

        <!--[if lt IE 9]>
	        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
        <![endif]-->

        <!-- ICONS -->
        <script src="https://kit.fontawesome.com/df07cb0f03.js" crossorigin="anonymous"></script>

        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@700;800&family=Atma:wght@500;600&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">


        <title>HOME | Weekly Planner</title>
    </head>
    <body>
        <div id="roxo">
            <nav>
                <a href=""><span id="logo">Weekly Planner</span></a>

                <div class="menu">
                    <!-- 
                        Checking if the user is logged in 
                        if yes, user icon is for User Page | Logout
                        if no, user icon is for Login | Register
                    -->
                    <?php
                        if (!isset($_SESSION['autenticated']) || $_SESSION['autenticated'] != 'YES'){
                    ?>    
                        <a href="login-register.php">Login</a>
                        <a href="login-register.php">Cadastro</a>
                        <a href="planner.php">Tarefas</a>
                        <a href="login-register.php" id="create">Crie sua Conta</a>
                    <?php
                        }else{
                    ?>
                            <a href="user-page.php">Logout</a>
                            <a href="planner.php" id="create">Tarefas</a>
                    <?php 
                        } 
                    ?>
                </div>
            </nav>
    
            <div id="intro">
                <div class="texto">
                    <span class="titulo">
                        Levando a sua organização para 
                        o próximo passo.
                    </span>

                    <span class="subtitulo">
                        Agrupe suas tarefas por semana, diminua 
                        a procastinação e aumente sua produtividade
                    </span>
                </div>

                <div class="vetor">
                    <img src="../static\images\Add tasks-rafiki.png" alt="">
                </div>
            </div>
        </div>

        <div id="demonstracao">
            <div class="imagem">
                <img src="../static\images\teste.PNG" alt="">
            </div>

            <div class="explicacao">
                <p>
                    Sistema de Login para salvar seguramente seus dados/tarefas
                </p>
                <p>
                    Simples sistema de adição, edição e exclusão de tarefas
                </p>
            </div>
        </div>

        <?php
            include_once 'footer.php';
        ?>
    </body>
</html>