<?php
    require_once('libreria/header.php');
    require_once('libreria/nav.php');

    function showPi(){
        showHeader();
        showNav();
        
        echo('
            <h1>Pi!</h1>
            <p>
                Es la relación entre la longitud de una circunferencia y su diámetro en geometría euclidiana.
                Es un número irracional​ y una de las constantes matemáticas más importantes. Se emplea frecuentemente
                    en matemáticas, física e ingeniería. El valor numérico de π, truncado a sus primeras cifras, es el siguiente:
            </p>
                El valor es: '.pi().'
        '); 
    }
