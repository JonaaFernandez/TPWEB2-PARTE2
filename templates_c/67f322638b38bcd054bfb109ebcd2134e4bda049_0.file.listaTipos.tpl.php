<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-18 23:40:04
  from 'C:\xampp\htdocs\TPweb2parte2\templates\listaTipos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb5a2c47bdd32_35865262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67f322638b38bcd054bfb109ebcd2134e4bda049' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPweb2parte2\\templates\\listaTipos.tpl',
      1 => 1604000892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb5a2c47bdd32_35865262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

<h2 class="display-4 text-capitalize grey-color container mt-4 mb-4"> Altas </h2> 


    <table class="font-size-tabla  ml-2 mt-4 tabla">
        <th class="th-tipo text-center th-prop th-prop-largo"> NUMERO </th>
        <th class="th-nombre text-center th-prop th-prop-largo ">NOMBRE</th>
        <th class="th-valor text-center th-prop th-prop-largo ">DESCRIPCION</th>
        <th class="th-valor text-center th-prop th-acciones "> </th>
        <th class="th-valor text-center th-prop th-acciones "> ACCIONES</th>
        <th class="th-valor text-center th-prop th-acciones th-borde-right "> </th>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipito']->value, 'tp');
$_smarty_tpl->tpl_vars['tp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tp']->value) {
$_smarty_tpl->tpl_vars['tp']->do_else = false;
?>             <tr>
                                <td class="td-prop text-center"><?php echo $_smarty_tpl->tpl_vars['tp']->value->id;?>
</td>
                <td class="td-prop text-center"><?php echo $_smarty_tpl->tpl_vars['tp']->value->nombre;?>
</td>
                <td class="td-prop text-center"><?php echo $_smarty_tpl->tpl_vars['tp']->value->descripcion;?>
</td>
    
                <div class="acciones">
                    <td class="p-0 border-btn "> <a href="verTipo/<?php echo $_smarty_tpl->tpl_vars['tp']->value->id;?>
" class="p-1 m-1 bg-dark ancho-ver "> VER </td>
                    <td class="p-0 border-btn "> <a href="modificarTipo/<?php echo $_smarty_tpl->tpl_vars['tp']->value->id;?>
" class="p-1 m-1 bg-dark ancho-modif"> MODIFICAR </td>
                    <td class="p-0 th-borde-right border-btn"> <a href="eliminarTipo/<?php echo $_smarty_tpl->tpl_vars['tp']->value->id;?>
" class=" p-1 m-1 bg-dark ancho-ver"> ELIMINAR </td>
    
                            </div>

        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>


    <div class="container mt-4">

        <p class="gris-color h2 ml-1"> Tipo de Propiedad </p>
        <form action="insertTipo" class="" method="post">
            <div class="form-group ">
                <label for="title" class="" >Nombre</label>
                <input type="text" class="w-50 altura-input ml-5" name="input_name" value="">
            </div>
            <div class="form-group ">
                <label for="title " class="">Descripcion</label>
                <input type="text" class="w-75 altura-input ml-4" name="input_description" value="">
            </div>
            <button type="submit" class="btn btn-primary bg-dark">Ingresar</button>
    </div>
    </form>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
