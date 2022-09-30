<?php
function mostrarEdades($edades){
    echo '<ul>';
    foreach ($edades as $nombre => $edad) {
        echo '<li>'.$nombre.' tiene '.$edad.' años. </li>';
    }
    echo '</ul>';
}

