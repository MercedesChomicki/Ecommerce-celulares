<?php
require_once 'app/controllers/list.controller.php';

//define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//Debe leer una acción y una lista de parámetros => :action/[:a/:b]
//http://localhost/route.php?action=noticia/1


// leo el parametro accion
$action = 'home'; // accion por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];  // action => about/juan
}

// parsea la accion Ej: about/juan --> ['about', 'juan']
$params = explode('/', $action); // genera un arreglo

// instancio el unico controller que existe por ahora
$listController = new ListController();

switch ($params[0]) {
    case 'home':
        $listController->showCellphones();
        break;
    case 'categoria':
        $listController->showCategories();
        break;
    case 'categoriamodelos':
        $listController->showCellphonesByBrand();
        break;
    case 'ver mas':
        $listController->showMore($params[1]);
    default:
        echo "404 not found";
        break;
}
