<?php
echo ('
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
        <p> Porque el servidor es el que interpreta PHP,creo, no sé. </p>
    ');


echo ('
        <h1> Práctico 1 </h1>
        <h2> Ejercicio 2 </h2>
        
        <h3> a) Escribir un programa que muestre una lista html generada desde el servidor a través de un arreglo. Identifique las diferencias
        entre arreglos asociativos e indexados </h3>
        <p> El arreglo indexado va poniendo las cosas en orden con un ID, mientras que el asociativo identifica el elemento
        mediante una key </p>
    ');

echo ('<button type="submit" action="index.php" id=boton method="get"> Mostrar 2 </button>');
echo ('<button type="submit" action="index.php" id=5 method="get"> Mostrar 5 </button>');
echo ('<button type="submit" action="index.php" id=todos> Mostrar TODOS </button>');


    $elementos = array("Elemento1", "Elemento2", "Elemento3", "Elemento4", "Elemento5", "Elemento6", "Elemento3", "Elemento3", "Elemento3", "Elemento3");
    echo ('<ul>');
    foreach ($elementos as $elemento) {
        echo ('<li> Un elemento que se llama ' . $elemento . '</li>');
    }
    echo ('</ul>');

echo ('<h1> Práctico 1 </h1>
        <h2> Ejercicio 3 </h2>
        <h3> Escribir un programa que en un form le pongas nombre apellido y edad y se envie al serv y se muestre </h3>');

include_once('form.html');

if (!empty($_GET['nombre']) && !empty($_GET['apellido']) && !empty($_GET['edad'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    echo $nombre;
    echo $apellido;
    echo $edad;
} else {
    echo ('Faltan datos');
}

echo 'bueno no sé por que no anda y tengo sueño';

echo ('  
        <h3> a) Cual es la diferencia entre post y get, y en qué situación conviene usar una u otra </h3>
        <p> con GET la url muestra los datos enviados por lo que no es un método seguro para contraseñas o info sensible. No estaría 
        bien usarlo para un login por ejemplo
        con POST la URL no contiene los datos enviados porque se envían con el REQUEST, por lo que es ideal para la info sensible. </p>
        <h3> b) Diferencias entre los arreglos $_POST, $_GET y $_REQUEST</h3>
        <p> GET y POST son arreglos asociativos, REQUEST contiene todo el contenido de POST y de GET y se usa cuando esperamos cualquiera 
        de los dos por parámetro. La diferencia entre POST y GET la expliqué en el anterior.</p>
        <h3> c) Generar validaciones desde el servidor Ningun campo puede estar vacio. Cual es la diferencia entre realizar estas
        validaciones desde el lado del servidor o del cliente</h3>
        <p> No estoy segura, creo que es lo mismo. Poniendo del lado del servidor no sé si el cliente se entera.
        Del lado del server con el if is set creo, y del lado del cliente poniendole required al input del form, no? Con la verificacion
        en el lado del cliente, EL FORM NO SE ENVIA sale un warning para que el usuario sepa que le falta completar y donde. Si la verificacion
        se hace desde el lado del servidor, EL FORM SE ENVIA y recien ahi se puede saber si falta info</p>
    ');

echo ('<h1> Práctico 1 </h1>
    <h2> Ejercicio 4 </h2>
    <h3> Modificar el ejercicio 2, para que con link modifiue el tamaño de la lista que se muestra.
    NO ME SALE</h3>');

echo ('<h1> Práctico 1 </h1>
    <h2> Ejercicio 5 </h2>
    <h3> Construir un programa que calcule el IMC de una persona = peso/altura e informe el estao de la persona segun como está </h3>');


echo ('<p> Calcular IMC</p>');
echo ('
    
    <form action="index.php/calcularIMC" method="get">
        <label for="">Peso </label>
        <input type="" name="peso" id="">
        <label for="">Altura</label>
        <input type="" name="altura" id="">
        <button type="submit"> CALCULAR IMC </button>
    </form>
    
    ');
echo ('');

if (!empty($_GET['peso'])) {
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];
    $calcularIMC = $peso / $altura;
    echo ('Su IMC es: ' . $calcularIMC);
    if ($calcularIMC < 18.51) {
        echo ('Su estado es BAJO PESO');
    }
    if ($calcularIMC > 18.50 && $calcularIMC <= 24.99) {
        echo ('Su estado es NORMAL');
    }
    if ($calcularIMC > 25 && $calcularIMC < 30) {
        echo ('Su estado es SOBREPESO');
    }
    if ($calcularIMC > 30) {
        echo ('Su estado es OBESIDAD');
    }
}

echo ('<h1> Práctico 1 </h1>
    <h2> Ejercicio 6 </h2>
    <h3> tabla de multiplicar, el usuario ingresa el límite </h3>
    <p> </p>
    ');
    $filas = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15");
    $columnas = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10");
echo('
    <table>
        <thead>
            <tr>
                <th> TABLA DEL.... </th>');
                foreach($columnas as $columna){
                    echo('<th> '.$columna.' </th>');  
                }
                echo('
            </tr>
        </thead>
        <tbody>
        ');

        foreach($filas as $fila){
            echo('
            <tr>
                <td> Tabla del '.$fila.' </td>
                ');
                foreach($columnas as $columna){
                    echo('<td> '.$fila*$columna.' </td>');
                }
                echo('
            </tr>');
        }
        echo('

        </tbody>

    </table>
    ');

    echo ('Seleccion hasta cuál tabla desea ver ');
    echo ('Deseo ver hasta la tabla del: ');

    echo('
    <form action="index.php" id="tablas" method="GET">
        <select name="tabla" id="">
            <option value="2">Hasta la del 2</option>
            <option value="6">Hasta la del 6</option>
            <option value="10">Hasta la del 10</option>
            <option value="15">Hasta la del 15</option>
        </select>
        <button type="submit">Guardar</button>
    </form>
    ');

    if(isset($_GET['tabla'])){
        $tabla = $_GET['tabla'];
        echo('Me llega la tabla con valor '.$tabla);
        
        echo('
    <table>
        <thead>
            <tr>
                <th> TABLA DEL.... </th>');
                foreach($columnas as $columna){
                    echo('<th> '.$columna.' </th>');  
                }
                echo('
            </tr>
        </thead>
        <tbody>
        ');

        for ($i=0; $i < $tabla; $i++) { 
            echo('
            <tr>
                <td> Tabla del '.$filas[$i].' </td>
                ');
                foreach($columnas as $columna){
                    echo('<td> '.$filas[$i]*$columna.' </td>');
                }
                echo('
            </tr>');
        }
        echo('

        </tbody>

    </table>
    ');
        
    echo('Me llega la tabla con valor '.$tabla);
        
    }

    echo ('<h1> Práctico 1 </h1>
    <h2> Ejercicio 7 </h2>
    <h3> invertir dinero en un banco </h3>
    <p> </p>
    ');


echo ('');
