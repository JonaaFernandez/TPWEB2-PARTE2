<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 01:22:12
  from 'C:\xampp\htdocs\TPweb2parte2\templates\showOne.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb317b47e83b6_79124327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6032bf1660b5e9bd3e582a53a38ed7fcf663344e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPweb2parte2\\templates\\showOne.tpl',
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
function content_5fb317b47e83b6_79124327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<title><?php echo $_smarty_tpl->tpl_vars['this']->value->title;?>
</title>

<h1 class="mt-3"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

<div class="container">


</div>

<div class="container color-gris">

    <div class="form-group w-25">
        <label for="title">Tipo de Propiedad</label>
        <label class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['prop']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
 </label>
    </div>
    <div class="form-group">
        <label for="title">Nombre</label>
        <label for="title" class="form-control w-25" id="nombre" name="input_name" aria-describedby="input_name"> <?php echo $_smarty_tpl->tpl_vars['propiedad']->value[0]->nombre;?>
</label>
    </div>
    <div class="form-group">
        <label for="title"> Direccion </label>

        <label for="title" class="form-control w-25" id="adress" name="input_adress" aria-describedby="input_adress" value="<?php echo $_smarty_tpl->tpl_vars['propiedad']->value[0]->direccion;?>
"><?php echo $_smarty_tpl->tpl_vars['propiedad']->value[0]->direccion;?>
</label>

    </div>
    <div class="form-group">
        <label for="description">Descripcion</label>
        <label for="title" class="form-control w-75" id="description" name="input_description" value="'.$prop[0]->descripcion.'"> <?php echo $_smarty_tpl->tpl_vars['propiedad']->value[0]->descripcion;?>
 </label>
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <label for="title" class="form-control w-25" id="value" name="input_value" value="<?php echo $_smarty_tpl->tpl_vars['prop']->value[0]->valor;?>
">U$S <?php echo $_smarty_tpl->tpl_vars['propiedad']->value[0]->valor;?>
 </label>
    </div>
    <div class="form-group">
        <label for="Fecha de Ingreso">Fecha de Ingreso</label>
        <label for="title" type="date" class="form-control w-25" id="input_date" name="input_date" value="'.$prop[0]->fecha.'"><?php echo $_smarty_tpl->tpl_vars['propiedad']->value[0]->fecha;?>
 </label>
        <label class="form-check-label" for=" "></label>
    </div>
 
   <a href="ventas" type="button" class="btn btn-primary  ml-0 bg-dark" value="volver" > VOLVER </a>
</div>









<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
