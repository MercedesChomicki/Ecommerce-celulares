<?php 
require_once './app/models/brand.model.php';
require_once './app/views/brand.view.php';
require_once './app/helpers/AuthHelper.php';

class BrandController {

    private $model;
    private $view;
    private $authHelper;

    public function __construct()
    {
        $this->model = new BrandModel();
        $this->view = new BrandView();
        $this->authHelper = new AuthHelper();
    }

    public function showCategories()
    {  
        $this->view->showCategories();
    }

    public function showCellphonesByBrand($id_marca)
    {
        if (!isset($id_marca) || empty($id_marca)) {
            $this->view->renderError();
            return;
        }
        $brand = $id_marca;
        $cellphones = $this->model->getCellphonesByBrand($brand);
        $this->view->showCellphonesByBrand($cellphones);
    }


}