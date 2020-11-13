<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 19:34:32
  from 'C:\xampp\htdocs\TPweb2-Fernandez-Fino\templates\showOneEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8888283240f5_56618932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dff7253cd7b5530a13949b05ab4de2983cfa30e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPweb2-Fernandez-Fino\\templates\\showOneEdit.tpl',
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
function content_5f8888283240f5_56618932 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<title><?php echo $_smarty_tpl->tpl_vars['this']->value->title;?>
</title>
</head>

<body>
    <h1 class="mt-4"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

    <div class="container">

        <ul class="list-group">
        </ul>
    </div>

    <div class="container">
        <form action="editar" method="POST">
            <div class="form-group">
                <label for="title">Tipo de Propiedad </label>

                <select name="input_type" id="">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipo']->value, 'tp');
$_smarty_tpl->tpl_vars['tp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tp']->value) {
$_smarty_tpl->tpl_vars['tp']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['tp']->value->id;?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['tp']->value->id;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['propiedad']->value[0]->tipo;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable1 == $_prefixVariable2) {?>
                                <?php echo " selected";?>

                            <?php }?>
                            ><?php echo $_smarty_tpl->tpl_vars['tp']->value->nombre;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="input_id" value="<?php echo $_smarty_tpl->tpl_vars['propiedad']->value[0]->id;?>
">
                <label for="title">Nombre</label>
                <input class="form-control" id="nombre" name="input_name" aria-describedby="input_name" value=" <?php echo $_smarty_tpl->tpl_vars['propiedad']->value[0]->nombre;?>
  ">
            </div>
            <div class="form-group">
                <label for="title"> Direccion </label>

                <input class="form-control" id="adress" name="input_adress" aria-describedby="input_adress" value=" <?php echo $_smarty_tpl->tpl_vars['propiedad']->value[0]->direccion;?>
">

            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input class="form-control" id="description" name="input_description" value="<?php echo $_smarty_tpl->tpl_vars['propiedad']->value[0]->descripcion;?>
">
            </div>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" class="form-control" id="value" name="input_value" value="<?php echo $_smarty_tpl->tpl_vars['propiedad']->value[0]->valor;?>
">
            </div>
            <div class="form-group">
                <label for="Fecha de Ingreso">Fecha de Ingreso</label>
                <input type="date" class="form-control" id="input_date" name="input_date" value="<?php echo $_smarty_tpl->tpl_vars['propiedad']->value[0]->fecha;?>
">
                <label class="form-check-label" for=" "></label>
                <button type="submit" class="btn btn-primary mt-4 bg-dark">Editar</button>
            </div>

        </form>
    </div>



    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
