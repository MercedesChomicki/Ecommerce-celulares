<?php
require_once 'app/controllers/list.controller.php';
require_once 'app/controllers/login.controller.php';
require_once 'app/controllers/signIn.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'home';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

$listController = new ListController();
$loginController = new LoginController();
$signInController = new SignInController();

switch ($params[0]) {
    case 'login':
        $loginController->login();
        break;
    case 'logout':
        $loginController->logout();
        break;
    case 'verify':
        $loginController->verifyLogin();
        break;
    case 'signin':
        $signInController->signIn();
        break;
    case 'verify-sign-in':
        $signInController->verifySignIn();
        break;
    case 'home':
        $listController->showCellphones();
        break;
    case 'categorias':
        $listController->showCategories();
        break;
    case 'categoriamodelos':
        if (isset($params[1])) {
            $listController->showCellphonesByBrand($params[1]);
        } else {
            $listController->showCellphonesByBrand(null);
        }
        break;
    case 'vermas':
        if (isset($params[1])) {
            $listController->showMore($params[1]);
        } else {
            $listController->showMore(null);
        }
        break;
    default:
        echo "404 not found";
        break;
}
