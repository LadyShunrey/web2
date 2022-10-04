<?php
    
    require_once('libreria/header.php');
    require_once('libreria/nav.php');


    function showCalculadora(){
        showHeader();
        showNav();
        
        echo('
                    <h1>CALCULADORA</h1>

                    <form action="calculadora.php" method="GET">
                        
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

                </body>
            </html>

        ');
    }
    showCalculadora();