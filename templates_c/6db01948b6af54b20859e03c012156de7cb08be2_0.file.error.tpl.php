<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 20:33:03
  from 'C:\xampp\htdocs\TPweb2-Fernandez-Fino\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8895df571376_91112466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6db01948b6af54b20859e03c012156de7cb08be2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPweb2-Fernandez-Fino\\templates\\error.tpl',
      1 => 1602726083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8895df571376_91112466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

<h1 class="display-3 mt-4">  <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
 </h1>       

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
