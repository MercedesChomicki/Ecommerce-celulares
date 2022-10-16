<?php
require_once 'app/controllers/list.controller.php';
require_once 'app/controllers/brand.controller.php';
require_once 'app/controllers/login.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'home';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

$listController = new ListController();
$brandController = new BrandController();
$loginController = new LoginController();

switch ($params[0]) {
    case 'login':
        $loginController->login();
        break;
    case 'verify':
        $loginController->verifyLogin();
        break;
    case 'logout':
        $loginController->logout();
        break;
    case 'home':
        $listController->showCellphones();
        break;
    case 'categorias':
        $brandController->showCategories();
        break;
    case 'categoriamodelos':
        if (isset($params[1])) {
            $brandController->showCellphonesByBrand($params[1]);
        } else {
            $brandController->showCellphonesByBrand(null);
        }
        break;
    case 'vermas':
        if (isset($params[1])) {
            $listController->showMore($params[1]);
        } else {
            $listController->showMore(null);
        }
        break;
    case 'add':
        $listController->addCellphone();
        break;
    case 'delete':
        $listController->deleteCellphone($params[1]);
        break;
    case 'update':
        $listController->updateCellphone($params[1]);
        break;
    case 'confirmUpdate':
        $listController->confirmUpdateCellphone($params[1]);
    default:
        echo "404 not found";
        break;
}
