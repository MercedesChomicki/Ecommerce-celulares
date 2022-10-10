<?php
require_once './app/models/list.model.php';
require_once './app/views/list.view.php';
//require_once './app/helpers/auth.helper.php';

class ListController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new ListModel();
        $this->view = new ListView();

        // barrera de seguridad
        //$authHelper = new AuthHelper();
        //$authHelper->checkLoggedIn();
    }

    public function showCellphones() {
        $cellphones = $this->model->getAllCellphones();
        $this->view->showCellphones($cellphones);
    }

    public function showCategories(){
        $this->view->showCategories();
    }

    public function showCellphonesByBrand(){
        echo "HELLO WORLD";
        // // if (!isset($_GET['id_marca']) || empty($_GET['id_marca'])) {
        // //     $this->view->renderError();
        // //     return;  //die();
        // // }
        $brand = $_GET['id_marca'];
        $cellphones = $this->model->getCellphonesByBrand($brand);
        // // $this->view->renderCellphonesByBrand($cellphones);
        $this->view->showCellphones($cellphones);
    }

    public function showMore($id){
        if (!isset($_GET['id_celular']) || empty($_GET['id_celular'])) {
            $this->view->renderError();
            return;  //die();
        }
        $id = $_GET['id_celular'];
        $cellphone = $this->model->getCellphone($id);
        $this->view->showMore($cellphone);
    }
   

    
    // function addCellphone() {
    //     // TODO: validar entrada de datos

    //     $model = $_POST['modelo'];
    //     $price = $_POST['precio'];
    //     $description = $_POST['descripcion'];
    //     $brand = $_POST['marca'];

    //     $id = $this->model->insertCellphone($model, $price, $description, $brand);

    //     header("Location: " . BASE_URL); 
    // }
   
    // function deleteTask($id) {
    //     $this->model->deleteTaskById($id);
    //     header("Location: " . BASE_URL);
    // }

    // function finalizeTask($id) {
    //     $this->model->finalize($id);
    //     header("Location: " . BASE_URL); 
    // }


}

