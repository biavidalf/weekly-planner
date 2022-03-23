<!-- 
    ================= HOME PAGE (INDEX) =================
 -->
<?php
    require_once 'navegation.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME | Weekly Planner</title>
    </head>
    <body>
        <div class="marker">HOMEPAGE</div>

        <!-- Introducing the app -->
        <div id="home">
            <div class="container">
                <span class="topic">Nossos Objetivos</span>
                <p>Ajudar na organização da semana dos nossos usuários, fornecendo uma melhor produtividade e calma durante o seu dia.</p>
            </div>
            
            <div class="container">
                <span class="topic">Funcionalidades</span>
                <p>Fornecemos um planner semanal e um sistema de login, que permite você guardar, editar e deletar suas tarefas!</p>
            </div>

            <div class="start">
                <p class="start-p">Comece a se planejar! É só se registrar e adicionar suas tarefas!</p>
                <a href="login-register.html">COMEÇAR</a>
            </div>

            <div class="images">
                <img src="../static/images/planner-print.png" alt="weekly-planner-print">
            </div>

        </div><!-- /end home -->

        <?php
            include_once 'footer.php';
        ?>
    </body>
</html>