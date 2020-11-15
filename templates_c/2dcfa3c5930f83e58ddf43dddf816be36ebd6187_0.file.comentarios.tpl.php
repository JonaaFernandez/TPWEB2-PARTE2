<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-15 15:34:13
  from 'C:\xampp\htdocs\TPweb2parte2\templates\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb13c65135e99_61883253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dcfa3c5930f83e58ddf43dddf816be36ebd6187' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPweb2parte2\\templates\\comentarios.tpl',
      1 => 1605450798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb13c65135e99_61883253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>






<div>

<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

</div>







<?php echo '<script'; ?>
 src="js/comentarios.js"><?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
