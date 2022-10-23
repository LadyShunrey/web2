<!-- 4) diseñe la tabla de ruteo simplemente definir las acciones del router -->

<?php

switch ($params[0]) {
    case 'usuarios':
        obtenerListaDeUsuarios();
        break;
    case 'nuevo':
        agregarNuevoUsuario();
        break;
    case 'mostrar':
        mostrarUsuario([$params[1]]);
        break;
    default:
        echo "error";
        break;
}
