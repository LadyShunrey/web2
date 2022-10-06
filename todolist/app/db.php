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

    //inserta una tarea en la db
    function insertTask($titulo, $descripcion, $prioridad){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tasks;charset=utf8','root','');

        $query = $db->prepare('INSERT INTO task(titulo, descripcion, prioridad) VALUES(?, ?, ?)');
        $query->execute([$titulo, $descripcion, $prioridad]);

        //Obtengo y devuelvo el ID de la tarea nueva
        return $db->lastInsertId();
    }

    function deleteTask($id){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tasks;charset=utf8','root','');
        $query = $db->prepare('DELETE FROM `task` WHERE `task`.`id` = ?');
        $query->execute([$id]);
        
    }

    function updateTask($id){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tasks;charset=utf8','root','');
        $query = $db->prepare('UPDATE task SET finalizada=1 WHERE task.id = ?'); //finalizada con signo de pregunta
        $query->execute([$id]); //agregar antes $completed
    }