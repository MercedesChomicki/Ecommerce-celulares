<?php
/* Smarty version 4.2.1, created on 2022-10-12 16:51:22
  from 'C:\xampp\htdocs\WEB2\TPE-WEB2\templates\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6346d46a543605_03474787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a4b8679449486089bd7af99e4d9de796503e8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-WEB2\\templates\\list.tpl',
      1 => 1665586277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6346d46a543605_03474787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\WEB2\\TPE-WEB2\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titulo']->value ?? '', 'UTF-8');?>
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
" class="card-img-top rounded" alt="Celular modelo <?php echo $_smarty_tpl->tpl_vars['cellphone']->value->modelo;?>
">
        <div class="card-body">
        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['cellphone']->value->modelo;?>
</h5>
        <b class="card-number">$<?php echo $_smarty_tpl->tpl_vars['cellphone']->value->precio;?>
</b>
        <p class="card-text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['cellphone']->value->descripcion,100);?>
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
