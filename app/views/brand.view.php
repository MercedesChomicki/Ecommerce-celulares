<?php
require_once 'libs\smarty-4.2.1\libs\Smarty.class.php';

class BrandView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showCategories()
    {
        $this->smarty->display('templates/categories.tpl');
    }

    function showCellphonesByBrand($cellphones)
    {
        $this->smarty->assign('cellphones', $cellphones);
        $this->smarty->assign('titulo', 'Lista de productos');
        $this->smarty->display('templates/listByBrand.tpl');
    }

    function renderError()
    {
        echo "<h2>Error! Marca no especificada.</h2>";
    }
}
