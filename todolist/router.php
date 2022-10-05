<?php

    require_once './app/tasks.php';

    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action = 'listar';
    }

    $params = explode('/', $action);

    //TABLA DE RUTEO
    //LISTAR -> lista todas las tareas

    switch($params[0]){
        case 'listar';
            //listar todas las tardeas de la DB
            showTasks();
            break;
        default:
            echo'404 - Página no encontrada';
            break;
    }