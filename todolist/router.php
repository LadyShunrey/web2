<?php

    require_once './app/tasks.php';
    require_once('controllers/task.controller.php');

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action = 'listar';
    }

    $params = explode('/', $action);

    //TABLA DE RUTEO
    //LISTAR -> lista todas las tareas
    //insertar -> inserta una nueva tarea (recibe el POST)

    $controller = new TaskController();

    switch($params[0]){
        case 'listar':
            $controller->showTasks();
            break;
        case 'insertar':
            $controller->addTask();
            break;
        case 'borrar':
            $controller->delTask($params[1]);
            break;
        case 'completar':
            $controller->completeTask($params[1]);
        default:
            echo'404 - Página no encontrada';
            break;
    }