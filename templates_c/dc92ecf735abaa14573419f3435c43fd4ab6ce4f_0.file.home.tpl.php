<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-18 21:28:54
  from 'C:\xampp\htdocs\TPWEB2-PARTE2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb5840633a837_74698973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc92ecf735abaa14573419f3435c43fd4ab6ce4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2-PARTE2\\templates\\home.tpl',
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
function content_5fb5840633a837_74698973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <!-- EMPIEZA EL CARROUSEL -->
    <h3 class="txtayudando mt-3 ">Ayudando siempre a nuestros clientes a concretar sus sueños.</h3>
    <div class="bd-example w-75 mx-auto mt-4">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="4000">
                    <img src="./images/carr1.jpg" class="d-block w-100" height="700px" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item" data-interval="4000">
                    <img src="./images/carr2.jpg" class="d-block w-100" height="700px" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item" data-interval="6000">
                    <img src="./images/carr3.jpg" class="d-block w-100" height="700px" alt="... ">
                    <div class="carousel-caption d-none d-md-block ">
                    </div>
                </div>
                <div class="carousel-item" data-interval="4000">
                    <img src="./images/carr4.jpg" class="d-block w-100" height="700" alt="... ">
                    <div class="carousel-caption d-none d-md-block ">
                    </div>
                </div>
                <div class="carousel-item" data-interval="4000">
                    <img src="./images/deptocarr.jpg" class="d-block w-100" height="700px" alt="... ">
                    <div class="carousel-caption d-none d-md-block ">
                    </div>
                </div>
                <div class="carousel-item" data-interval="4000">
                    <img src="./images/carr6.jpg" class="d-block w-100" height="700px" alt="... ">
                    <div class="carousel-caption d-none d-md-block ">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- TERMINA EL CARROUSEL -->

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
