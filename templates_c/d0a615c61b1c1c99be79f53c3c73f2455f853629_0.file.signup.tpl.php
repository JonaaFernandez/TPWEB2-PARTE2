<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 00:35:07
  from 'C:\xampp\htdocs\TPweb2parte2\templates\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb30cabbc1842_97762941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0a615c61b1c1c99be79f53c3c73f2455f853629' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPweb2parte2\\templates\\signup.tpl',
      1 => 1605569705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb30cabbc1842_97762941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1 class="mx-auto display-4 mt-4"> Registrarse </h1>


<div class="wrapper fadeInDown">
    <div id="formContent">


      

        <!-- Login Form -->
        <form action="registro" method="post">
            <input type="text" id="user" class="fadeIn w-75 h-25 second border border-primary mt-4" name="input_user" placeholder="user">
             <input type="text" id="email" class="fadeIn w-75  h-25 second border border-primary mt-2" name="input_email" placeholder="e-mail"> 
            <input type="password" id="password" class="w-75 mt-2 mb-4 text-center fadeIn second border border-primary" name="input_password" placeholder="password">
            <input type="submit" class="fadeIn fourth border border-primary" value="SIGN UP">
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
