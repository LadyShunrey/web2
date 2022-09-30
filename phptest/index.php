
<?php
    require_once('header.php');
    include_once ('vista.php');
    $nombre = "Nanita";
    $edad = 30;
    
    echo "<h2>".'Bienvenida '.$nombre.' y tenés '.$edad.' años'."</h2>";

    $autos = array("Volvo", "BMW", "Toyota");
    $count = count($autos);

    echo $count;
    
    $autos[3] = 'Audi';
     
    $count = count($autos);
    echo $count;
    
    echo $autos;

    echo $autos[1];

    $edades = array(
        "Juan" => 31,
        "Martin" => 17,
        "Julian" => 25
    );
    echo $edades['Juan'];
    $edades['Juan'] = 21;
    $edades['Pepe'] = 10;

    mostrarEdades($edades);
    require_once('footer.php');
?>
    