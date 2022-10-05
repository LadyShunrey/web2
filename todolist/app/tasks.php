<?php
    require_once 'db.php';

    function showTasks(){
        include './templates/header.php';
        echo "hola! acá listo las tareas";
        //pido las tareas a la db
        $tasks = getAllTasks();
        echo'<ul class="list-group mt-5">';
        foreach($tasks as $task){
            echo "<li class='list-group-item'>$task->titulo - $task->prioridad</li>";
        }
        echo'</ul>';
        
        include './templates/footer.php';
    }