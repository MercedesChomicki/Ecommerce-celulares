<?php
/* Smarty version 4.2.1, created on 2022-10-10 22:26:58
  from 'C:\xampp\htdocs\WEB2\TPE-WEB2\templates\lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63448012d80a43_95425172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac245991b7e62be7d41fd19ea0a57421401ae0f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-WEB2\\templates\\lista.tpl',
      1 => 1665433587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63448012d80a43_95425172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div class="container-cards">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cellphones']->value, 'cellphone');
$_smarty_tpl->tpl_vars['cellphone']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cellphone']->value) {
$_smarty_tpl->tpl_vars['cellphone']->do_else = false;
?>

    <div class="card">
        <img src="<?php echo $_smarty_tpl->tpl_vars['cellphone']->value->Imagen;?>
" class="card-img-top rounded" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['cellphone']->value->modelo;?>
</h5>
        <p class="card-number">$<?php echo $_smarty_tpl->tpl_vars['cellphone']->value->precio;?>
</p>
        <a href="<?php echo $_smarty_tpl->tpl_vars['cellphone']->value->id_celular;?>
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
