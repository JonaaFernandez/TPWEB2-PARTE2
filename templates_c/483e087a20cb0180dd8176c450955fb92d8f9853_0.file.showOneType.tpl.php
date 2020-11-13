<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 20:05:50
  from 'C:\xampp\htdocs\TPweb2-Fernandez-Fino\templates\showOneType.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f888f7e223ba6_18792198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '483e087a20cb0180dd8176c450955fb92d8f9853' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPweb2-Fernandez-Fino\\templates\\showOneType.tpl',
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
function content_5f888f7e223ba6_18792198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<title><?php echo $_smarty_tpl->tpl_vars['this']->value->title;?>
</title>

<h1 class="mt-3">Descripcion</h1>

<div class="container">
    <form action="verTodosLosTipos" method="get">
        <div class="form-group">
            <label for="title">Numero</label>
            <label for="title" class="form-control w-25"><?php echo $_smarty_tpl->tpl_vars['tipo']->value[0]->id;?>
</label>
        </div>
        <div class="form-group">
            <label for="title">Tipo de Propiedad</label>
            <label for="title" class="form-control w-25"><?php echo $_smarty_tpl->tpl_vars['tipo']->value[0]->nombre;?>
</label>
        </div>
        <div class="form-group">
            <label for="title">Descripcion</label>
            <label for="title" class="form-control"><?php echo $_smarty_tpl->tpl_vars['tipo']->value[0]->descripcion;?>
</label>
        </div>
        <button type="submit" class="btn btn-primary bg-dark">Siguiente</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
