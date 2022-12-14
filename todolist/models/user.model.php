<?php

class UserModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tasks;charset=utf8','root','');
    }

    //Obtengo el usuario de la base de datos
    function getUser($email){
        $query = $this->db->prepare('SELECT * FROM users WHERE email = ?');
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_OBJ);

        return $user;
    }
}



