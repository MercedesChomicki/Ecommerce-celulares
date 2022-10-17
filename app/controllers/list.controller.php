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

    function addCellphone()
    {
        if (!empty($_POST['title']) && !empty($_POST['price']) && !empty($_POST['description']) && !empty($_POST['id_marca'])) {
            $model = $_POST['title'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $id_brand = $_POST['id_marca'];
            //Recogemos el archivo enviado por el formulario
            $image = $_FILES['img']['name'];

            //Si el archivo contiene algo y es diferente de vacio
            if (isset($image) && $image != "") {
                //Obtenemos algunos datos necesarios sobre el archivo
                $type = $_FILES['img']['type'];
                $size = $_FILES['img']['size'];
                $fileTemp = $_FILES['img']['tmp_name'];

                //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño (200 kb como máximo.)
                if ((strpos($type, "jpeg") || strpos($type, "jpg") || strpos($type, "png")) && ($size < 2000000)) {
                    $this->model->insertCellphone($model, $price, $description, $id_brand, $image, $fileTemp);
                } else {
                    $this->model->insertCellphone($model, $price, $description, $id_brand);
                }
            }

            $this->view->showHomeLocation();
        } else {
            // $this->view->showErrorEmptyForm($logged);
        }
    }

    function deleteCellphone($id)
    {
        $this->model->deleteCellphoneById($id);
        header("Location: " . BASE_URL);
    }

    function updateCellphone($id)
    {
        if (!isset($id) || empty($id)) {
            $this->view->renderError();
            return;
        }
        $id_celular = $id;
        $cellphone = $this->model->getCellphone($id_celular);
        $this->view->formUpdateCellphone($cellphone);
        // header("Location: " . BASE_URL); 
    }

    public function confirmUpdateCellphone($id)
    {

        if (!empty($_POST['title']) && !empty($_POST['price']) && !empty($_POST['description']) && !empty($_POST['id_marca'])) {
            $model = $_POST['title'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $id_brand = $_POST['id_marca'];
            $image = $_FILES['img']['name'];

            //Si el archivo contiene algo y es diferente de vacio
            if (isset($image) && $image != "") {
                //Obtenemos algunos datos necesarios sobre el archivo
                $type = $_FILES['img']['type'];
                $size = $_FILES['img']['size'];
                $fileTemp = $_FILES['img']['tmp_name'];

                //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño (200 kb como máximo.)
                if ((strpos($type, "jpeg") || strpos($type, "jpg") || strpos($type, "png")) && ($size < 2000000)) {
                    $this->model->updateCellphone($id, $model, $price, $description, $id_brand, $image, $fileTemp);
                } else {
                    $this->model->updateCellphone($id, $model, $price, $description, $id_brand);
                }
            }

            header("Location: " . BASE_URL);
        }
    }
}
