<?php
require_once 'libs\smarty-4.2.1\libs\Smarty.class.php';

class BrandView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showCategoriesLocation(){
        header("Location: " . BASE_URL . "categorias");
    }

    function showCategories($brands, $logged)
    {
        $this->smarty->assign('brands', $brands);
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('titulo', 'Categorias');
        $this->smarty->assign('tituloForm', 'Agregar Categoria');
        $this->smarty->display('templates/categories.tpl');
    }

    function showCellphonesByBrand($cellphones, $logged)
    {
        $this->smarty->assign('cellphones', $cellphones);
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('titulo', 'Lista de productos');
        $this->smarty->assign('tituloForm', 'Agregar celular');
        $this->smarty->display('templates/list.tpl');
    }

    function formUpdateBrand($brand, $logged){
        $this->smarty->assign('brand', $brand);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('templates/form_updateBrand.tpl');
    }

    function showErrorForm() {
        $this->smarty->assign('error', 'Formulario vacio');
        $this->smarty->display('templates/error.tpl');
    }

}
