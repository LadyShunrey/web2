<?php
    require_once('sections.php');
    require_once('libreria/operaciones.php');

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    //require_once('calculadora.php'); NO LO VAMOS A INCLUIR POR AHORA PORQUE TENEMOS OPERACIONES

    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action = 'home';
    }

    $params = explode('/', $action); //me va a devolver un arreglo de 3 elementos

    switch($params[0]){
        case'home':
            showCalculadora();
            break;
        case 'sumar':
            sumar($params[1], $params[2]);
            break;
        case 'restar':
            restar($params[1], $params[2]);
            break;
        case 'multiplicar':
            multiplicar($params[1], $params[2]);
            break;
        case 'dividir':
            dividir($params[1], $params[2]);
            break;
        case 'pi':
            showPi();
            break;
        case 'about':
            if(empty($params[1])){
                showError();
            }
            else{
                showAbout($params[1]);
            }
            break;
        case 'contact':
            showContactForm();
            break;
        default:
            echo('404 página no encontrada');
            break;
    }