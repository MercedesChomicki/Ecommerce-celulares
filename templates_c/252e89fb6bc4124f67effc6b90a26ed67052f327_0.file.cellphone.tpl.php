<?php
/* Smarty version 4.2.1, created on 2022-10-11 04:29:51
  from 'C:\xampp\htdocs\WEB2\TPE-WEB2\templates\cellphone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344d51fbc6572_55756065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '252e89fb6bc4124f67effc6b90a26ed67052f327' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-WEB2\\templates\\cellphone.tpl',
      1 => 1665455389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6344d51fbc6572_55756065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <h1><?php echo $_smarty_tpl->tpl_vars['cellphone']->value->modelo;?>
</h1>
    <div class="task-cellphone">
        <img src='<?php echo $_smarty_tpl->tpl_vars['cellphone']->value->Imagen;?>
' class="task-cellphone__img">
        <div class="task-cellphone__byp">
            <b>$<?php echo $_smarty_tpl->tpl_vars['cellphone']->value->precio;?>
</b>
            <p><?php echo $_smarty_tpl->tpl_vars['cellphone']->value->descripcion;?>
</p>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
