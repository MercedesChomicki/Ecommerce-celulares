<?php
require_once './app/models/list.model.php';
require_once './app/views/list.view.php';
require_once './app/helpers/AuthHelper.php';

class ListController {
    private $model;
    private $view;
    private $authHelper;

    public function __construct() {
        $this->model = new ListModel();
        $this->view = new ListView();
        $this->authHelper = new AuthHelper();
    }

    public function showCellphones() {

        $this->authHelper->checkLoggedIn();
        
        $cellphones = $this->model->getAllCellphones();
        $this->view->showCellphones($cellphones);
    }

    public function showCategories(){
        $this->authHelper->checkLoggedIn();    
        $this->view->showCategories();
    }

    public function showCellphonesByBrand($id_marca){
        $this->authHelper->checkLoggedIn();
    
        if (!isset($id_marca) || empty($id_marca)) {
            $this->view->renderError();
            return;
        }
        $brand = $id_marca;
        $cellphones = $this->model->getCellphonesByBrand($brand);
        $this->view->showCellphonesByBrand($cellphones);
    }

    public function showMore($id){
        $this->authHelper->checkLoggedIn();
        if (!isset($id) || empty($id)) {
            $this->view->renderError();
            return;
        }
        $id_celular = $id;
        $cellphone = $this->model->getCellphone($id_celular);
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

