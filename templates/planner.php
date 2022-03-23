<!-- 
    ================= WEEKLY PLANNER =================
 -->
<?php
    include_once 'navegation.php';

    /* Page for users only */
    require_once '../controller/acess-validation.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PLANNER | Weekly Planner</title>
    </head>

    <body>
        <div class="marker">PLANNER</div>

        <div id="planner">
            
            <?php
                /* Loop around the days of the week, even if in that day the user has no tasks yet */
                include '../controller/tasks.php';
                $week_days = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado', 'Domingo'];
                foreach ($week_days as $day){
            ?>

                <div class="container">
                    <h4><?php echo $day; ?></h4>
                    <ul>
                        <?php 
                            /* Looping around the tasks of the user */
                            foreach($tasks as $task){
                                /* Organazing by week day */
                                if($task['week_day'] == strtolower($day)){
                                    ?>
                                    <div style="clear:both"></div> <!-- Cleaning the float -->

                                    <!-- Task content -->
                                    <li><p> <?php echo $task['task'];?> </p>
                                    
                                    <!-- Delete button -->
                                    <a href="../controller/delete_task.php?task_id=<?php echo $task['id'] ?>"><i class="fas fa-eraser"></i></a>
                                    
                                    <!-- Edit button -->
                                    <a href="#popup?nmr_task=<?php echo $task['id'] ?>" class="edit_btn"><i class="fa fa-pencil"></i></a>
                                                                    
                                        <div class="edit-task" id="popup?nmr_task=<?php echo $task['id'] ?>">
                                            <!-- Close button -->
                                            <a href="#" class="close"><i class="fa fa-close"></i></a>
                                            <div style="clear:both"></div>

                                            <!-- Edit popup window -->
                                            <form action="../controller/edit_task.php" method="POST">
                                                <div class="">
                                                    <h3 class="rewrite">Edit Task</h3>
                                                    <input type="text" class="rewrite" value="<?php echo $task['task'] ?>" name="task" required>
                                                    <input type="hidden" name="task_id" value="<?php echo $task['id'] ?>">
                                                </div>
                                                <div class="">
                                                    <div class=""></div>
                                                    <button type="submit" class="rewrite">Salvar</button>
                                                </div>
                                            </form>
                                        </div>    
                                    </li> <!-- /end list -->

                                    <?php
                                }
                            }
                        ?>
                    </ul>
                </div>

            <?php
                }
            ?>
            <!-- /end week days containers -->
            
            <!-- Container for adding tasks -->
            <div class="container add-task">
                <h4>Add task</h4>

                <form action="../controller/add_task.php" method="POST">
                    Conteudo:
                    <input type="text" name="task-text" class="texto" placeholder="Digite aqui..." maxlength="44" required>
                    Dia da semana:
                    <select name="week" id="week">
                        <optgroup label="Dias úteis">
                            <option value="segunda">Segunda</option>
                            <option value="terça">Terça</option>
                            <option value="quarta">Quarta</option>
                            <option value="quinta">Quinta</option>
                            <option value="sexta">Sexta</option>
                        </optgroup>
                        <optgroup label="Fim de semana">
                            <option value="sabado">Sábado</option>
                            <option value="domingo">Domingo</option>
                        </optgroup>
                    </select>

                    <button type="submit">Adicionar</button>
                </form>
            </div><!-- /end add-task container -->
 
        </div> <!-- /end planner -->

        <?php
            include_once 'footer.php';
        ?>

    </body>
</html>