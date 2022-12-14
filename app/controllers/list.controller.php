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
        $brands = $this->model->getAllBrands();
        $this->view->showCellphones($cellphones, $brands, $logged);
    }

    public function showMore($id = null)
    {
        $logged = $this->authHelper->isLogged();
        $cellphone = $this->model->getCellphone($id);
        $this->view->showMore($cellphone, $logged);
    }

    function updateCellphone($id)
    {
        $logged = $this->authHelper->isLogged();
        $id_celular = $id;
        $cellphone = $this->model->getCellphone($id_celular);
        $brands = $this->model->getAllBrands();
        $this->view->formUpdateCellphone($cellphone, $brands, $logged);
    }

    function formInputControl($id = null)
    {
        $this->authHelper->checkLoggedIn();

        if (!empty($_POST['title']) && !empty($_POST['price']) && !empty($_POST['description']) && !empty($_POST['id_marca'])) {
            $model = $_POST['title'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $id_brand = $_POST['id_marca'];
            $image = $_FILES['img']['name'];

            if (isset($image) && $image != "") {
                $type = $_FILES['img']['type'];
                $fileTemp = $_FILES['img']['tmp_name'];

                if (isset($id) && $id != "") {
                    $this->confirmUpdateCellphone($id, $type, $model, $price, $description, $id_brand, $image, $fileTemp);
                } else {
                    $this->addCellphone($type, $model, $price, $description, $id_brand, $image, $fileTemp);
                }
            }

            $this->view->showHome();
        } else {
            $this->view->showErrorForm();
        }
    }

    function addCellphone($type, $model, $price, $description, $id_brand, $image, $fileTemp)
    {
        if ((strpos($type, "jpeg") || strpos($type, "jpg") || strpos($type, "png"))) {
            $this->model->insertCellphone($model, $price, $description, $id_brand, $image, $fileTemp);
        } else {
            $this->model->insertCellphone($model, $price, $description, $id_brand);
        }
    }

    public function confirmUpdateCellphone($id, $type, $model, $price, $description, $id_brand, $image, $fileTemp)
    {
        if ((strpos($type, "jpeg") || strpos($type, "jpg") || strpos($type, "png"))) {
            $this->model->updateCellphone($id, $model, $price, $description, $id_brand, $image, $fileTemp);
        } else {
            $this->model->updateCellphone($id, $model, $price, $description, $id_brand);
        }
    }

    function deleteCellphone($id)
    {
        $this->authHelper->checkLoggedIn();
        $this->model->deleteCellphoneById($id);
        $this->view->showHome();
    }
}
