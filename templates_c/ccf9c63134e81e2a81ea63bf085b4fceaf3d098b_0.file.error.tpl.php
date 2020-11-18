<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 00:13:43
  from 'C:\xampp\htdocs\TPWEB2-PARTE2\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb5aaa7e228f9_07060904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccf9c63134e81e2a81ea63bf085b4fceaf3d098b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2-PARTE2\\templates\\error.tpl',
      1 => 1605307758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb5aaa7e228f9_07060904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

<h1 class="display-3 mt-4">  <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
 </h1>       

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
