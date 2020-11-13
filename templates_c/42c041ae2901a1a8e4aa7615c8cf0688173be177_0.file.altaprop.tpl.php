<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 19:38:38
  from 'C:\xampp\htdocs\TPweb2-Fernandez-Fino\templates\altaprop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f88891e015343_76591638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42c041ae2901a1a8e4aa7615c8cf0688173be177' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPweb2-Fernandez-Fino\\templates\\altaprop.tpl',
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
function content_5f88891e015343_76591638 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <ul class="list-group">
    </ul>
</div>

<h1 class="gris-color display-4 mx-auto mt-4">
<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

</h1>

<div class="container mt-4">
    <form action="insert" method="post">
        <div class="form-group">
            <label for="title">Tipo de Propiedad: </label>
            <select name="input_type">
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
        </div>
        <div class="form-group w-50">
            <label for="title">Nombre</label>
            <input class="form-control" id="nombre" name="input_name" aria-describedby="inmput_name">
        </div>
        <div class="form-group w-50">
            <label for="title">Direccion</label>
            <input class="form-control" id="adress" name="input_adress" aria-describedby="inmput_adress">

        </div>

        <div class="form-group w-50">
            <label for="valor">Valor</label>
            <input type="number" class="form-control" id="value" name="input_value">
        </div>
        <div class="form-group w-50">
            <label for="Fecha de Ingreso">Fecha de Ingreso</label>
            <input type="date" class="form-control" id="input_date" name="input_date">

        </div>
        <div class="form-group ">
            <label for="description">Descripcion</label>
            <textarea name="input_description" id="description" class="form-control w-50" rows="3" cols="20">  </textarea>
        </div>
        <button type="submit" class="btn btn-primary bg-dark">Agregar</button>
    </form>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
