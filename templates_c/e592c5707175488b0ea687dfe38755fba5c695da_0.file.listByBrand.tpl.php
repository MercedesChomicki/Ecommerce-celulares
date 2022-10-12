<?php
/* Smarty version 4.2.1, created on 2022-10-12 22:10:10
  from 'C:\xampp\htdocs\WEB2\TPE-WEB2\templates\listByBrand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63471f22b69f44_14894280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e592c5707175488b0ea687dfe38755fba5c695da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-WEB2\\templates\\listByBrand.tpl',
      1 => 1665605408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63471f22b69f44_14894280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\WEB2\\TPE-WEB2\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titulo']->value ?? '', 'UTF-8');?>
</h1>
<h2 class="volver"><a href="categorias">Volver atras</a></h2>
<div class="container-cards">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cellphones']->value, 'cellphone');
$_smarty_tpl->tpl_vars['cellphone']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cellphone']->value) {
$_smarty_tpl->tpl_vars['cellphone']->do_else = false;
?>

    <div class="card card-by-brand">
        <img src="<?php echo $_smarty_tpl->tpl_vars['cellphone']->value->Imagen;?>
" class="card-img-top rounded" alt="Celular modelo <?php echo $_smarty_tpl->tpl_vars['cellphone']->value->modelo;?>
">
        <div class="card-body">
        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['cellphone']->value->modelo;?>
</h5>
        <b class="card-number">$<?php echo $_smarty_tpl->tpl_vars['cellphone']->value->precio;?>
</b>
        <p class="card-text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['cellphone']->value->descripcion,50);?>
</p>
        <a href="vermas/<?php echo $_smarty_tpl->tpl_vars['cellphone']->value->id_celular;?>
" class="btn btn-primary">Ver mas</a>
        </div>
    </div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
