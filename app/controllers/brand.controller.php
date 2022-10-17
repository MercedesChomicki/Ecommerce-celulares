<?php
require_once './app/models/brand.model.php';
require_once './app/views/brand.view.php';
require_once './app/helpers/AuthHelper.php';

class BrandController
{

    private $model;
    private $view;
    private $authHelper;

    public function __construct()
    {
        $this->model = new BrandModel();
        $this->view = new BrandView();
        $this->authHelper = new AuthHelper();
    }

    function showCategories()
    {
        $logged = $this->authHelper->isLogged();
        $brands = $this->model->getAllBrands();
        $this->view->showCategories($brands, $logged);
    }

    function showCellphonesByBrand($id_marca = null)
    {
        $logged = $this->authHelper->isLogged();
        $brand = $id_marca;
        $cellphones = $this->model->getCellphonesByBrand($brand);
        $this->view->showCellphonesByBrand($cellphones, $logged);
    }

    function addBrand()
    {
        $this->authHelper->checkLoggedIn();

        if (isset($_POST['name']) && !empty($_POST['name'])) {
            $name = $_POST['name'];

            $this->model->addBrand($name);

            $this->view->showCategoriesLocation();
        } else {
            $this->view->showErrorForm();
        }
    }

    function deleteBrand($id_marca)
    {
        $this->authHelper->checkLoggedIn();
        $this->model->deleteBrandById($id_marca);
        $this->view->showCategoriesLocation();
    }

    public function updateBrand($id)
    {
        $logged = $this->authHelper->isLogged();
        $brand = $this->model->getBrand($id);
        $this->view->formUpdateBrand($brand, $logged);
    }

    function formInputControl($id)
    {
        $this->authHelper->checkLoggedIn();

        if (!empty($_POST['name'])) {
            $name = $_POST['name'];
            $this->model->updateBrand($id, $name);
            $this->view->showCategoriesLocation();
        } else {
            $this->view->showErrorForm();
        }
    }
}
