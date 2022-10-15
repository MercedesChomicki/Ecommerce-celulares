<?php
require_once './app/models/list.model.php';
require_once './app/views/list.view.php';
require_once './app/helpers/AuthHelper.php';

class ListController
{
    private $model;
    private $view;
    private $authHelper;

    public function __construct()
    {
        $this->model = new ListModel();
        $this->view = new ListView();
        $this->authHelper = new AuthHelper();
    }

    public function showCellphones()
    {      
        $logged = $this->authHelper->isLogged();
        $cellphones = $this->model->getAllCellphones();
        $this->view->showCellphones($cellphones, $logged);
    }

    public function showMore($id)
    {
        if (!isset($id) || empty($id)) {
            $this->view->renderError();
            return;
        }
        $id_celular = $id;
        $cellphone = $this->model->getCellphone($id_celular);
        $this->view->showMore($cellphone);
    }

    function showTasks() {
        $this->view->showForm();
    }

    function addCellphone()
    {
        if (!empty($_POST['title']) && !empty($_POST['price']) && !empty($_POST['description']) && !empty($_POST['id_marca'])) {
            $model = $_POST['title'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $id_brand = $_POST['id_marca'];
            
            $this->model->insertCellphone($model, $price, $description, $id_brand);

            header("Location: " . BASE_URL);
        }
    }

    // function deleteTask($id) {
    //     $this->model->deleteTaskById($id);
    //     header("Location: " . BASE_URL);
    // }

    // function finalizeTask($id) {
    //     $this->model->finalize($id);
    //     header("Location: " . BASE_URL); 
    // }


}
