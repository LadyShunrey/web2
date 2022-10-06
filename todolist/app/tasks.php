<?php
    require_once 'db.php';

    function showTasks(){
        include './templates/header.php';
        include './templates/form_alta.php';

        echo "hola! acá listo las tareas";
        //pido las tareas a la db
        $tasks = getAllTasks();
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

    function addTask(){
        $titulo = $_REQUEST['titulo'];
        $prioridad = $_REQUEST['prioridad'];
        $descripcion = $_REQUEST['descripcion'];

        $id = insertTask($titulo, $descripcion, $prioridad);

        //redirijo al home
        header("Location: " . BASE_URL);
    }

    function delTask($id){
        $delete = deleteTask($id);

        //redirijo al home
        header("Location: " . BASE_URL);
    }

    function completeTask($id){
        //acá voy a hacer un $completed = $_REQUEST['completed'];

        $updated = updateTask($id); //después de $id agrego $completed
        //redirijo al home
        header("Location: " . BASE_URL);
    }