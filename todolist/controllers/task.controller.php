<?php

require_once('models/task.model.php');
require_once('views/task.view.php');
require_once('helpers/auth.helper.php');

class TaskController{

    private $model;
    private $view;

    private $authHelper;

    public function __construct(){
        $this->model = new TaskModel();
        $this->view = new TaskView();
        $this->authHelper = new AuthHelper();

        //verificar que esté loggueado
        $this->authHelper->checkLoggedIn();
    }
    
    public function showTasks(){
        //obtengo tareas del model
        $tareas = $this->model->getAllTasks();
        //se las paso a la vista
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

    function viewTask($id){
        $task = $this->model->getTask($id);
        $this->view->showTask($task);
    }

    
}