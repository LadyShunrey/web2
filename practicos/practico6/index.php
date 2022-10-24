<?php

echo('
    <h1> Práctico 6 </h1>
    <h2> Ejercicio 5 </h2>
    <p> </p>
    
    <h3> La aerolínea AirUnicen quiere una API REST para consultar y actualizar el estado de sus vuelos. </h3>
    <p> </p>

    <p> i) Obtener el detalle completo de un vuelo determinado dado su numero de vuelo </p>
    <p> GET api/vuelo/:id_vuelo  </p>
    <p> </p>

    <p> ii) Obtener todas las ciudades en la aerolinea tiene alcance</p>
    <p> GET api/aerolinea/destinos ?? </p>
    <p> </p>

    <p> iii) Insertar un vuelo nuevo en el sistema</p>
    <p> POST api/vuelo  </p>
    <p> </p>

    <p> iv) Obtener todos los vuelos que aun no salieron (estado=en espera) </p>
    <p> GET api/vuelo/estado=en-espera</p>
    <p> </p>

    <p> v) Obtener todos los vuelos entre dos ciudades para un día determinado </p>
    <p> GET api/vuelo/:ciudad_origen_id_fk/:ciudad_destino_id_fk/fecha_salida </p>
    <p> </p>

    <p> vi) Obetener todos los vuelos con destino Barcelona </p>
    <p> GET api/vuelo/:ciudad_destino_id_fk=7  (suponiendo que 7="Barcelona")  </p>
    <p> </p>
');