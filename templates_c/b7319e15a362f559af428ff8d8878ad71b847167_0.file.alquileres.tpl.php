<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-18 21:29:15
  from 'C:\xampp\htdocs\TPWEB2-PARTE2\templates\alquileres.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb5841b661cd4_97358585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7319e15a362f559af428ff8d8878ad71b847167' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2-PARTE2\\templates\\alquileres.tpl',
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
function content_5fb5841b661cd4_97358585 (Smarty_Internal_Template $_smarty_tpl) {
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
