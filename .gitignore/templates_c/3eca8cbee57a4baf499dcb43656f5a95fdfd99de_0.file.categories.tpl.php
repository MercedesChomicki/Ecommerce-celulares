<?php
/* Smarty version 4.2.1, created on 2022-10-11 05:36:48
  from 'C:\xampp\htdocs\WEB2\TPE-WEB2\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344e4d068a6b5_76175180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eca8cbee57a4baf499dcb43656f5a95fdfd99de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-WEB2\\templates\\categories.tpl',
      1 => 1665459401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6344e4d068a6b5_76175180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<h1>Celulares por Marca</h1>
<ul class="list-cellphones">
    <li><a href="categoriamodelos/1">Samsung</a></li>
    <li><a href="categoriamodelos/2">Apple</a></li>
    <li><a href="categoriamodelos/3">Motorola</a></li>
    <li><a href="categoriamodelos/4">Xiaomi</a></li>
    <li><a href="categoriamodelos/5">LG</a></li>
    <li><a href="categoriamodelos/6">Huawei</a></li>
</ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
