<?php
    echo('
        <h1> Hello World!</h1>
        <h1> Práctico 1 </h1>
        <h2> Ejercicio 1 </h2>
        
        <h3> a) Qué extensión debe tener la página? </h3>
        <p> .php! </p>

        <h3> b) Es dinámica o estática? Cuál es la diferencia? </h3>
        <p> Por ahora es estática ya que solo estamos mostrando un texto, para que sea dinámica tiene que generarse algo del 
        lado del servidor. En una página estática el servidor es quien tiene toda la info que va a mostrar y cuando le llega la petición la muestra.
        En una dinámica el servidor cuando recibe una petición se encarga de hacer otra petición a otro lado (Base de datos, servicio, etc) 
        o donde corresponda para generar una respuesta y mostrarsela al cliente </p> 

        <h3> c) Por qué es necesario tener un servidor web para realizar esto? </h3>
        <p> POrque el servidor es el que interpreta PHP </p>
    ');


    echo('
        <h1> Práctico 1 </h1>
        <h2> Ejercicio 2 </h2>
        
        <h3> a) Escribir un programa que muestre una lista html generada desde el servidor a través de un arreglo. Identifique las diferencias
        entre arreglos asociativos e indexados </h3>
        <p> El arreglo indexado va poniendo las cosas en orden con un ID, mientras que el asociativo identifica el elemento
        mediante una key </p>
    ');

    $elementos = array("Elemento1", "Elemento2", "Elemento3");
    echo $elementos;
    echo('<ul>'); 
    foreach($elementos as $elemento){
        echo('<li> Un elemento que se llama ' .$elemento. '</li>');
    }
    echo('</ul>');
    // $elementos = [$elemento1, $elemento2, $elemento3];

    echo('
        
    ');

    require_once('form.html');
    

    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];

    echo $nombre;
    echo $apellido;
    echo $edad;
echo'bueno no sé por que no anda y tengo sueño';

