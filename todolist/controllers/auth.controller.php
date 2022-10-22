<?php
include_once('models/user.model.php');
include_once('views/auth.view.php');

class AuthController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new UserModel();
        $this->view = new AuthView();
    }

    public function showLogin(){
        $this->view->showFormLogin();
    }

    //verifica si los datos del user son correctos
    public function login(){
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            //Obtengo el usuario de la base de datos
            $user = $this->model->getUser($email);
        
            //Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, ($user->password))) {
                //si existe y está bien, inicio sesión
                session_start();
                $_SESSION['USER_ID'] = $user->id;
                $_SESSION['USER_EMAIL'] = $user->email;
                $_SESSION['USER_ROLE'] = $user->role;
                // $_SESSION['logged'] = true;
                // $_SESSION["username"] = $email;
                header("Location: " . BASE_URL);
            } else {
                // $this->view->showError();
                $this->view->showFormLogin("Usuario o contraseña no válido");
            }
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header("Location: " . LOGIN);
    }
}