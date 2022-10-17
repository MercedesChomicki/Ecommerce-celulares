<?php
require_once './app/models/user.model.php';
require_once './app/views/login.view.php';
require_once './app/helpers/AuthHelper.php';

class LoginController
{
    private $view;
    private $model;
    private $authHelper;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new LoginView();
        $this->authHelper = new AuthHelper();
    }

    public function login()
    {
        $logged = $this->authHelper->isLogged();
        $this->view->showLogin($logged);
    }

    public function verifyLogin()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model->getUserByEmail($email);

            if ($user && password_verify($password, $user->password)) {
            
                session_start();
                $_SESSION['IS_LOGGED'] = 1;
                $_SESSION['USER_EMAIL'] = $user->email;

                $this->view->showHome();
            } else {
                $this->view->showLogin("El usuario o la contraseña no existe.");
            }
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        $this->view->showLogin("Te deslogueaste");
    }
}
