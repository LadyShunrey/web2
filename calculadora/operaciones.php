<?php
    function sumar($op1, $op2){
        $resultado = $op1 + $op2;
        echo('El resultado de la suma es = ' . $resultado);
    }

    function restar($op1, $op2){
        $resultado = $op1 - $op2;
        echo('El resultado de la resta es = ' . $resultado);
    }

    function multiplicar($op1, $op2){
        $resultado = $op1 * $op2;
        echo('El resultado de la multiplicación es = ' . $resultado);
    }

    function dividir($op1, $op2){
        if($op2!=0){
            $resultado = $op1 / $op2;
            echo('El resultado de la división es = ' . $resultado);
        } else{
            echo"ERROR: Mo se puede dividir por cero!";
            die();
        }
        
    }