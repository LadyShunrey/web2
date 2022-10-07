<?php

include_once('models/task.model.php');
include_once('views/task.view.php');

class TaskController{

    private $model;
    private $view;

    public function __construct(){
        $this->model = new TaskModel();
        $this->view = new TaskView();
    }
    
    public function showTasks(){
        //obtengo tareas del model
        //$model = new TaskModel();
        $tareas = $this->model->getAllTasks();

        //se las paso a la vista

        //$view - new TaskView();
        $this->view->showTasks($tareas);
    }
    
    function addTask(){
        $titulo = $_REQUEST['titulo'];
        $prioridad = $_REQUEST['prioridad'];
        $descripcion = $_REQUEST['descripcion'];

        $this->model->insertTask($titulo, $descripcion, $prioridad);

        //redirijo al home
        header("Location: " . BASE_URL);
    }

    function delTask($id){
        $this->model->deleteTask($id);

        //redirijo al home
        header("Location: " . BASE_URL);
    }

    function completeTask($id){
        //acá voy a hacer un $completed = $_REQUEST['completed'];

        $this->model->updateTask($id); //después de $id agrego $completed
        //redirijo al home
        header("Location: " . BASE_URL);
    }
}