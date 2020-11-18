<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-18 21:51:28
  from 'C:\xampp\htdocs\TPWEB2-PARTE2\templates\showFormEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb58950a23858_27432565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aced6054780268d338736ade0499e388273c8034' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2-PARTE2\\templates\\showFormEdit.tpl',
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
function content_5fb58950a23858_27432565 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1 class="mt-4"> Modificar Datos</h1>
<div class="container mt-4">

    <form action="guardarMod" method="post">
        <div class="form-group">
            <input type="hidden" name="input_id" value=" <?php echo $_smarty_tpl->tpl_vars['tipo']->value[0]->id;?>
">
        </div>
        <div class="form-group">
            <label for="title">Nombre</label>
            <input type="text" class="form-control w-25 ml-5" name="input_name" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value[0]->nombre;?>
">
        </div>
        <div class="form-group">
            <label for="title">Descripcion</label>
            <input type="text" class="form-control w-75 ml-4" name="input_description" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value[0]->descripcion;?>
">
        </div>
        <button type="submit" class="btn btn-primary bg-dark">Ingresar</button>

    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
