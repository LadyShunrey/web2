<?php
    require_once('libreria/header.php');
    require_once('libreria/nav.php');

    function showCalculadora(){
        showHeader();
        showNav();

        echo('
                    <h1>CALCULADORA</h1>

                    <form id="formCalculator" method="GET">
                        
                        <label>Operador 1:</label>
                        <input type="number" name="valor1">

                        <label>Operador 2:</label>
                        <input type="number" name="valor2">

                        <select name="operacion" id="">
                            <option value="sumar">Sumar</option>
                            <option value="restar">Restar</option>
                            <option value="multiplicar">Multiplicar</option>
                            <option value="dividir">Dividir</option>
                        </select>

                        <button type="submit">Guardar</button>
                    </form>
                    <div id="container"></div>
                    <script src="js/main.js"></script>

                </body>
            </html>

        ');
    }

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
        showHeader();
        showNav();
        echo'ERROR: parámetro autor no recibido.
            </body>
        </html>';
    }

    function showContactForm(){
        showHeader();
        showNav();
        echo 'En construcción';
    }
 