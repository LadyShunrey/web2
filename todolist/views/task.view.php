<?php

class TaskView{
    function showTasks($tasks){
        include './templates/header.php';
        include './templates/form_alta.php';

        echo "hola! acá listo las tareas";
        
        echo'<ul class="list-group mt-5">';
        foreach($tasks as $task){
            if($task->finalizada == 1){
                echo "<li class='list-group-item-success'>$task->titulo - $task->prioridad - <button class='btn btn-danger'> <a href='borrar/$task->id'> BORRAR </a> </button> </li>";
            }
            else{
                echo "<li class='list-group-item'>$task->titulo - $task->prioridad - <button class='btn btn-danger'> <a href='borrar/$task->id'> BORRAR </a> </button> <button class='btn btn-primary'> <a href='completar/$task->id'> COMPLETAR </a> </button></li>";
            }
        }
        echo'</ul>';
        
        include './templates/footer.php';
    }
}