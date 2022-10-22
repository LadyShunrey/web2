<?php
    require_once('controllers/task.controller.php');
    require_once('controllers/auth.controller.php');

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
    define('LOGIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/login');

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

    switch($params[0]){
        case 'login':
            $authController = new AuthController();
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){ //si vino por POST
                $authController->login();   
            }
            else { 
                $authController->showLogin();
            }
            break;
        case 'logout':
            $authController = new AuthController();
            $authController->logout();
            break;
        case 'listar':
            $taskController = new TaskController();
            $taskController->showTasks();
            break;
        case 'insertar':
            $taskController = new TaskController();
            $taskController->addTask();
            break;
        case 'borrar':
            $taskController = new TaskController();
            $taskController->delTask($params[1]);
            break;
        case 'completar':
            $taskController = new TaskController();
            $taskController->completeTask($params[1]);
            break;
        case 'viewTask':
            $taskController = new TaskController();
            $taskController->viewTask($params[1]);
            break;
        default:
            echo'404 - Página no encontrada';
            break;
    }