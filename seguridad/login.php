<?php
function renderForm()
{
    echo '
 <h2>Login</h2>
 <form method="POST">
 <input type="text" name="email" placeholder="Ingrese su email..."/>
 <input type="password" name="password" placeholder="Ingrese su password..."/>
 <button>Login</button>
 ';
}

//Imprimir el formulario
//renderForm();

//Inicio sesion - sesión iniciada 
session_start();


//Creo la cuenta cuando venga en el POST
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    //Obtengo el usuario de la base de datos
    $db = new PDO('mysql:host=localhost;' . 'dbname=ejemplohashing;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM usuarios WHERE email = ?');
    $query->execute([$userEmail]);
    $user = $query->fetch(PDO::FETCH_OBJ);



    //Si el usuario existe y las contraseñas coinciden
    if ($user && password_verify($userPassword, ($user->password))) {
        $_SESSION['logged'] = true;
        $_SESSION["username"] = $userEmail;
        //var_dump($_SESSION);

        echo "Acceso exitoso";
    } else {
        echo "Acceso denegado";
    }
}





//Si esta logueado lo saludo, sino muestro el form de login
if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    echo "Sesión iniciada como: " . $_SESSION["username"];
} else {
    renderForm(); //Imprimir el formulario
}
