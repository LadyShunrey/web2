<?php
    
    require_once('libreria/header.php');
    require_once('libreria/nav.php');

    function showAbout($autor){
        showHeader();
        showNav();
        
        echo ('
    
                <h1>Acerca de </h1>
                <p>El Autor '.$autor.'.</p>
        
            </body>
        </html>');
    }
    
    function showError(){
        echo'ERROR: parámetro autor no recibido.';
    }
