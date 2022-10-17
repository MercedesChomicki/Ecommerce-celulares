<?php
require_once 'libs\smarty-4.2.1\libs\Smarty.class.php';

class BrandView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showCategories($logged)
    {
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('templates/categories.tpl');
    }

    function showCellphonesByBrand($cellphones, $logged)
    {
        $this->smarty->assign('cellphones', $cellphones);
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('titulo', 'Lista de productos');
        $this->smarty->display('templates/listByBrand.tpl');
    }

}
