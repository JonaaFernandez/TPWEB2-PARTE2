<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 20:33:08
  from 'C:\xampp\htdocs\TPweb2-Fernandez-Fino\templates\alquileres.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8895e42137c2_07125085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6209dd00f0c96297eb434cfa95b1cb738dd3704f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPweb2-Fernandez-Fino\\templates\\alquileres.tpl',
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
function content_5f8895e42137c2_07125085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


 <div class="contenedorgrande container mt-3">


        <div class="izqarriba">
            <h1>CASAS</h1>
            <img class="casa" src="images/casaalquiler.jpg" alt=>
        </div>
        <div class="derarriba">
            <h1>DEPARTAMENTOS</h1>
            <img class="depto" src="images/deptoalquiler.jpg" alt="">
        </div>



        <div class="izqabajo">
            <h1>LOCALES</h1>
            <img class="local" src="images/localalquiler.jpg" alt="">
        </div>
        <div class="derabajo">
            <h1>GALPONES</h1>
            <img class="terreno" src="images/galpon.jpg" alt="">
        </div>
    </div>









<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
