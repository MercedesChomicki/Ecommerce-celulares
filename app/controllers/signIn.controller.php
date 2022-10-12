<?php
require_once './app/models/signIn.model.php';
require_once './app/views/signIn.view.php';

class SignInController
{
    private $view;
    private $model;

    public function __construct()
    {
        $this->model = new SignInModel();
        $this->view = new SignInView();
    }

    public function signIn()
    {
        $this->view->signIn();
    }

    public function verifySignIn()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            //NO ANDA: QUIERO PONER "SI NO ESTA LOGEADO, GUARDAR"
            if(!isset($_SESSION['IS_LOGGED'])){
                $this->model->saveUser($email, $password);
                $this->view->showHome();
            } else { //Y SI YA ESTA LOGUEADO MOSTRAR: "EL USUARIO YA EXISTE"
                $this->view->signIn("El usuario ya existe.");
            } 
        }
    }
}
