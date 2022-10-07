<?php

class TaskModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tasks;charset=utf8','root','');
    }

    //obtiene la lista de tareas dejando en primer lugar las que no fueron finalizadas
    function getAllTasks(){
        
        // 1.Enviamos la consulta (2 sub pasos)
            //preparo la consulta
        $query = $this->db->prepare('SELECT * FROM task ORDER BY finalizada ASC');
            //la ejecuto 
        $query->execute();
        // 2.Obtengo la respuesta de la db. Procesamos los datos para genrar html
        $tasks = $query->fetchAll(PDO::FETCH_OBJ); //obtengo un arreglo con todas las tareas
                // echo"<pre>";
                // var_dump($tasks);
                // echo"</pre>";
        // 3.Cerramos la conexion
            //PDO cierra la conexión solo

        //devuelvo el resultado
        return $tasks;
    }

    //inserta una tarea en la db
    function insertTask($titulo, $descripcion, $prioridad){
        $query = $this->db->prepare('INSERT INTO task(titulo, descripcion, prioridad) VALUES(?, ?, ?)');
        $query->execute([$titulo, $descripcion, $prioridad]);

        //Obtengo y devuelvo el ID de la tarea nueva
        return $this->db->lastInsertId();
    }

    function deleteTask($id){
        $query = $this->db->prepare('DELETE FROM `task` WHERE `task`.`id` = ?');
        $query->execute([$id]);
    }

    function updateTask($id){
        $query = $this->db->prepare('UPDATE task SET finalizada=1 WHERE task.id = ?'); //finalizada con signo de pregunta
        $query->execute([$id]); //agregar antes $completed
    }
}