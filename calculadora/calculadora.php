<?php

    require_once('operaciones.php');

    if((!is_numeric($_REQUEST['valor1'])) || (!is_numeric($_REQUEST['valor2'])) || empty($_REQUEST['operacion'])){
        echo"ERROR: Parámetros incorrectos";
        die();
    }



    //obtener los valores
    $operando1 = $_REQUEST['valor1'];
    $operando2 = $_REQUEST['valor2'];

    $operacion = $_REQUEST['operacion'];

    //una vez que tenemos los valores vemos qué operaciones hacemos

    switch ($operacion) {
        case 'sumar': 
            $resultado = sumar($operando1, $operando2);
            break;
        case 'restar':
            $resultado = restar($operando1, $operando2);
            break;
        case 'multiplicar':
            $resultado = multiplicar($operando1, $operando2);
            break;
        case 'dividir':
            $resultado = dividir($operando1, $operando2);
            break;

        default:
            $resultado = 0;
            echo"Operación no válida";
            break;
    }