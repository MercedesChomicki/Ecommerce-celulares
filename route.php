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
        $brandController->showCellphonesByBrand($params[1]);
        break;
    case 'vermas':
        $listController->showMore($params[1]);
        break;
    case 'addCellphone':
        $listController->formInputControl();
        break;
    case 'deleteCellphone':
        $listController->deleteCellphone($params[1]);
        break;
    case 'updateCellphone':
        $listController->updateCellphone($params[1]);
        break;
    case 'confirmUpdateCellphone':
        $listController->formInputControl($params[1]);
    case 'addBrand':
        $brandController->addBrand();
        break;
    case 'deleteBrand':
        $brandController->deleteBrand($params[1]);
        break;
    case 'updateBrand':
        $brandController->updateBrand($params[1]);
        break;
    case 'confirmUpdateBrand':
        $brandController->formInputControl($params[1]);
        break;
    default:
        echo "404 not found";
        break;
}
