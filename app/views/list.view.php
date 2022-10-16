<?php
require_once 'libs\smarty-4.2.1\libs\Smarty.class.php';

class ListView
{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showLoginLocation(){
        header("Location: " . BASE_URL . 'login');
    }

    function showCellphones($cellphones, $logged)
    {
        $this->smarty->assign('cellphones', $cellphones);
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('titulo', 'Lista de productos');
        $this->smarty->assign('tituloForm', 'Agregar celular');
        $this->smarty->display('templates/list.tpl');
    }

    function showMore($cellphone)
    {
        $this->smarty->assign('cellphone', $cellphone);
        $this->smarty->display('templates/cellphone.tpl');
    }

    function showForm() {
        $this->smarty->display('templates/form_alta.tpl');
    }

    function formUpdateCellphone($cellphone){
        $this->smarty->assign('cellphone', $cellphone);
        $this->smarty->display('templates/form_update.tpl');
    }

    function renderError()
    {
        echo "<h2>Error! Marca no especificada.</h2>";
    }
}
