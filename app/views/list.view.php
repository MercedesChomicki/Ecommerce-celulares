<?php
require_once 'libs\smarty-4.2.1\libs\Smarty.class.php';

class ListView
{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showHome(){ 
        header("Location: " . BASE_URL);
    }

    function showCellphones($cellphones, $logged)
    {
        $this->smarty->assign('cellphones', $cellphones);
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('titulo', 'Lista de productos');
        $this->smarty->assign('tituloForm', 'Agregar celular');
        $this->smarty->display('templates/list.tpl');
    }

    function showMore($cellphone, $logged)
    {
        $this->smarty->assign('cellphone', $cellphone);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('templates/cellphone.tpl');
    }

    function formUpdateCellphone($cellphone, $logged){
        $this->smarty->assign('cellphone', $cellphone);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('templates/form_update.tpl');
    }

    function showErrorForm() {
        $this->smarty->assign('error', 'Formulario vacio');
        $this->smarty->display('templates/error.tpl');
    }

}
