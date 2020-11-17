<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 00:54:13
  from 'C:\xampp\htdocs\TPweb2parte2\templates\listapropiedades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb31125568f78_31710015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e462eea6242f083125a262ed665580c565bb3dee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPweb2parte2\\templates\\listapropiedades.tpl',
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
function content_5fb31125568f78_31710015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="w-75 mx-auto">
    <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>
        <h2 class="display-4 text-capitalize grey-color container"> Administrar </h2>
    <?php }?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['user']->value))) {?>
        <h2 class="display-4 text-capitalize grey-color container">Propiedades en venta </h2>
    <?php }?>
    <table class="font-size-tabla mt-4 ml-2 mt-2 tabla">
        <th class="th-tipo text-center th-prop th-prop-largo"> TIPO DE PROPIEDAD </th>
        <th class="th-nombre text-center th-prop th-prop-largo ">NOMBRE</th>
        <th class="th-valor text-center th-prop th-prop-largo "> VALOR en U$S</th>

        <?php if (!(isset($_smarty_tpl->tpl_vars['user']->value))) {?>
            <th class="th-valor text-center th-prop th-acciones "></th>
            <th class="th-valor text-center th-prop th-acciones "> ACCIONES</th>
            <th class="th-valor text-center th-prop th-acciones th-borde-right "></th>
        <?php }?>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propiedad']->value, 'tipoprop');
$_smarty_tpl->tpl_vars['tipoprop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipoprop']->value) {
$_smarty_tpl->tpl_vars['tipoprop']->do_else = false;
?>             <tr>
                <td class="td-prop text-center ">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipo']->value, 'tipos');
$_smarty_tpl->tpl_vars['tipos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipos']->value) {
$_smarty_tpl->tpl_vars['tipos']->do_else = false;
?>                         <?php if (($_smarty_tpl->tpl_vars['tipos']->value->id == $_smarty_tpl->tpl_vars['tipoprop']->value->tipo)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['tipos']->value->nombre;?>

                        </td>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    
                <td class="td-prop text-center"><?php echo $_smarty_tpl->tpl_vars['tipoprop']->value->nombre;?>
</td>
                <td class="td-prop text-center"> U$S <?php echo $_smarty_tpl->tpl_vars['tipoprop']->value->valor;?>
</td>
    
                <div class="acciones">
                                            <td class="p-0 border-btn "><a href="ver/<?php echo $_smarty_tpl->tpl_vars['tipoprop']->value->id;?>
" class="p-1 m-1 bg-dark ancho-ver "> VER </td>
                        <td class="p-0 border-btn "><a href="modificar/<?php echo $_smarty_tpl->tpl_vars['tipoprop']->value->id;?>
" class="p-1 m-1 bg-dark ancho-modif"> MODIFICAR </td>
                        <td class="p-0 th-borde-right border-btn"> <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['tipoprop']->value->id;?>
" class=" p-1 m-1 bg-dark ancho-ver"> ELIMINAR </td>
                                                           </div>
    
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </table>
    </div>
<p></p>
<div class="container">
    <div class="container">
        <form action="mostrarPorTipo" method="POST">
            <div class="form-group mr-5">
                <label for="title" class="offset-1 ">Seleccione el tipo de Propiedad </label>
                <select name="input_type" id="">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipo']->value, 'tp');
$_smarty_tpl->tpl_vars['tp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tp']->value) {
$_smarty_tpl->tpl_vars['tp']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['tp']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['tp']->value->nombre;?>
 </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <button type="submit" class="ml-3 btn btn-primary bg-dark">Seleccionar</button>

            </div>
        </form>
    </div>
        <?php if (!(isset($_smarty_tpl->tpl_vars['user']->value))) {?>
        <div class=" container mt-4 row">
            <p class=" gris-color h2 ml-1"> Dar de alta </p>
            <form action="alta" method="get">
                <div class=" d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary bg-dark ml-4">Continuar</button>
                </div>
            </form>
        </div>
    </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
