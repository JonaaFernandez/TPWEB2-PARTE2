<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-18 23:39:58
  from 'C:\xampp\htdocs\TPweb2parte2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb5a2be41fea2_15517580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d028451384d177066233987025dd28715aa0480' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPweb2parte2\\templates\\login.tpl',
      1 => 1605569565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb5a2be41fea2_15517580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1 class="mx-auto display-4 mt-4"> Ingresar </h1>


<div class="wrapper fadeInDown">
    <div id="formContent">


        <h2 class="mx-auto display-4 mt-4">
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </h2>

        <!-- Login Form -->
        <form action="verificarUsuario" method="post">
            <input type="text" id="user" class="fadeIn w-75 h-25 second border border-primary mt-4" name="input_user" placeholder="user">
                        <input type="password" id="password" class="w-75 mt-2 mb-4 text-center fadeIn second border border-primary" name="input_password" placeholder="password">
            <input type="submit" class="fadeIn fourth border border-primary" value="Log In">
        </form>
        

        <form action="registrarse" method="get">
         <input type="submit" class="fadeIn fourth border border-primary" value= "REGISTRARSE">
        </form>


        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
</div>








<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
