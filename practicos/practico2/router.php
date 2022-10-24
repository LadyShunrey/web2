<?php

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}
else{
    $action = 'home';
}

$params = explode('/', $action);

echo('
    <h1> Práctico 2 </h1>
    <h2> Ejercicio 1 </h2>
    <h3> Para qué se usa el ruteo? </h3>
    <p> Para que quede más semantica y organizada la aplicación </p>

    <h1> Práctico 2 </h1>
    <h2> Ejercicio 2 </h2>
    <h3> que ventajas tiene la URL semántica? </h3>
    <p> Mejor posicionamiento SEO y mejor comprensión del usuario </p>

    
    <h1> Práctico 2 </h1>
    <h2> Ejercicio 3 </h2>
    <h3> Qué es y que nos permite hacer el .htaccess </h3>
    <p> Es configuracion de APACHE, es para configurar opciones de directorio entre otras ventajas </p>

    <h1> Práctico 2 </h1>
    <h2> Ejercicio 4 </h2>
    <h3> Diseñé la tabla de ruteo sin implementarla </h3>
');

// <!-- 4) diseñe la tabla de ruteo simplemente definir las acciones del router -->

switch ($params[0]) {
    case 'usuarios':
        obtenerListaDeUsuarios(); //a)
        break;
    case 'nuevo':
        agregarNuevoUsuario(); //b)
        break;
    case 'mostrar':
        mostrarUsuario([$params[1]]); //c)
        break;
    default:
        echo "error";
        break;
}


echo('
    <h1> Práctico 2 </h1>
    <h2> Ejercicio 5 </h2>
    <h3> Modificar el ejercicio 6 del tp1, enrutar la tabla de multiplicar con los accesos a la tabla ejemplo "/tabla/5 ó /tabla/10" 
    (Lo mismo el ejercicio 4)</h3>
');

switch ($params[0]){
    case'tabla':
        mostrarTabla($params[1]);
        break;
    default:
        echo'error';
        break;
}

echo('
<p> Mostrar hasta la tabla del....</p>
    <form action="tabla" id="tablas" method="GET">
        <select name="tabla" id="">
            <option value="2">Hasta la del 2</option>
            <option value="6">Hasta la del 6</option>
            <option value="10">Hasta la del 10</option>
            <option value="15">Hasta la del 15</option>
        </select>
        <button type="submit">Guardar</button>
    </form>
    ');

function mostrarTabla($tabla){
    $filas = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15");
    $columnas = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10");

    echo('El valor de tabla es: '.$tabla);

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

        for($i=0; $i<$tabla; $i++){
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


}