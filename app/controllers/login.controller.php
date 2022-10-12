<?php
require_once './app/models/user.model.php';
require_once './app/views/login.view.php';

class LoginController
{
    private $view;
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new LoginView();
    }

    public function login()
    {
        $this->view->showLogin();
    }

    public function verifyLogin()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model->getUserByEmail($email);

            if ($user && password_verify($password, $user->password)) {
            
                session_start();
                $_SESSION['IS_LOGGED'] = true;
                $_SESSION['USER_EMAIL'] = $user->email;

                $this->view->showHome();
            } else {
                $this->view->showLogin("El usuario o la contraseña no existe.");
            }
        }
    }

    // public function logout()
    // {
    //     session_start();
    //     session_destroy();
    //     $this->view->showLogin("Te deslogueaste");
    // }
}
