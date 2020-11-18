<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-18 23:16:57
  from 'C:\xampp\htdocs\TPWEB2-PARTE2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb59d592e14a1_88579796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44950faaea48637500620942cbe8d786ea205384' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2-PARTE2\\templates\\header.tpl',
      1 => 1605737550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb59d592e14a1_88579796 (Smarty_Internal_Template $_smarty_tpl) {
?> <!DOCTYPE html>
 <html lang="en">

 <head>
     <base href="<?php echo BASE_URL;?>
">
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
     <link rel="stylesheet" href="css/estilocomun.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/login.css">
     <?php echo '<script'; ?>
 src="js/botones.js"><?php echo '</script'; ?>
>
 </head>

 <body class="body-bgc">

     <header>
         <div class="container flow">
             <nav class="navbar navbar-expand-lg  navbar-dark bg-dark shadow-sm navbarcolor">
                 <div class="container ">
                     <a href="#" class="navbar-brand">
                         <!-- Logo Image -->
                         <img src="images/logonuevo2.jpg" width="95" height="80 " alt=" " class=" align-middle mr-2 mt-1  ">
                         <!-- Logo Text -->

                         <span class="text-uppercase font-weight-bold "></span>

                     </a>

                     <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

                     <div id="navbarSupportedContent" class="collapse navbar-collapse">
                         <ul class="navbar-nav ml-auto">
                             <li class="nav-item "><a href="home" class="nav-link ">Home<span class="sr-only "></span></a></li>
                             <li class="nav-item "><a href="ventas" class="nav-link ">Ventas</a></li>
                             <li class="nav-item "><a href="alquileres" class="nav-link ">Alquileres</a></li>
                             <li class="nav-item "><a href="contacto" class="nav-link ">Contacto</a></li>
                             <li class="nav-item "><a href="verTodosLosTipos" class="nav-link ">Tipos de Propiedad</a></li>
                         <?php if ($_smarty_tpl->tpl_vars['log']->value == 1) {?>
                                                                                  
                             <li class="nav-item "><a href="logout" class="nav-link ">Cerrar sesion </a></li>
                             <?php } else { ?>
                             <li class="nav-item "><a href="login" class="nav-link ">Iniciar sesion</a></li>  
                             <?php }?>
                             
                             
                             



                                                      </ul>
                     </div>
                 </div>

         </div>
         </nav>
        <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?> 
         <div class="row">
             <h4 class=" font-weight-light container mt-3  gris-color d-flex justify-content-end">Bienvenido: <span class="font-weight-bold ml-2">  <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 </span></h4>
         </div>
        <?php }?>  

         </div>
     </header>
     <!-- TERMINA NAV --><?php }
}
