<?php
    //Va a traer todas las tareas de la bd
    function getAllTasks(){
        // 1.Abrimos la conexion
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tasks;charset=utf8','root','');
        // 2.Enviamos la consulta (2 sub pasos)
            //preparo la consulta
        $query = $db->prepare('SELECT * FROM task');
            //la ejecuto 
        $query->execute();
        // 3.Obtengo la respuesta de la db. Procesamos los datos para genrar html
        $tasks = $query->fetchAll(PDO::FETCH_OBJ); //obtengo un arreglo con todas las tareas
                // echo"<pre>";
                // var_dump($tasks);
                // echo"</pre>";
        // 4.Cerramos la conexion
            //PDO cierra la conexión solo

        //devuelvo el resultado
        return $tasks;

    }