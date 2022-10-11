<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';

function esMamifero($animal){
    return $animal->clase == "mamifero";
}

function showMamiferos(){
    $animales = getAnimales();
    $mamiferos = [];

    foreach($animales as $animal){
        if(esMamifero($animal)){
            $mamiferos[] = $animal;
        }
    }

    //mandar al template para renderizarlos

    //1.Lo instancio (a Smarty)
    $smarty = new Smarty();

    //2. asigno datos al template
    $smarty->assign('titulo', 'mamiferos');
    $smarty->assign('animales', $animales);

    //3. la  invoco para renderizo al template

    $smarty->display('templates/lista.tpl');

}

showMamiferos();

function getAnimales(){
    $animJson = '[
        {
            "nombre": "Condor",
            "tamanio": "mediano",
            "clase": "ave"
        },
        {
            "nombre": "Carpincho",
            "tamanio": "mediano",
            "clase": "mamifero"
        },
        {
            "nombre": "Elefante",
            "tamanio": "grande",
            "clase": "mamifero"
        }
    ]';

    return json_decode($animJson);
}