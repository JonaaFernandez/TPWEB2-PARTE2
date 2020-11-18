<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-18 23:40:03
  from 'C:\xampp\htdocs\TPweb2parte2\templates\contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb5a2c322ffc8_38696721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4c83fafe8feadf0f3a791c5aa28ae79d0298c18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPweb2parte2\\templates\\contacto.tpl',
      1 => 1605739181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb5a2c322ffc8_38696721 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

 <div class="completo container mt-3">
        <section class="formulario col-xl-5">

            <h1 class="tituloFormTam" >FORMULARIO</h1>

            <form class="datosform w-75">
                Nombre y Apellido: <input type="text" name="nombre" value="" />
            </form>
            <form class="datosform w-75">
                Telefono: <input type="text" name="nombre" value="" />
            </form>
            <form class="datosform w-75">
                Correo Electronico: <input type="text" name="nombre" value="" />
            </form>
            <form class="datosform w-75">
                <p>Tipo de operacion:</p>
            </form>

            <select class="datosform ">
                <option value="Compra">Compra</option>
                <option value="Venta">Venta</option>
                <option value="Alquiler">Alquiler</option>
                <option value="Administracion">Administracion</option>
                <option value="Otro">Otro</option>
            </select>


            <p>Comentarios:</p>

            <textarea name="comentario" rows="2" cols="50">  </textarea>
            <p>Quiero recibir informacion a mi correo electronico acerca de novedades y promociones.</p>
            <input type="radio" name="syn" id="si" value="si">Si
            <input type="radio" name="syn" id="no" value="no">No

            <div class=cont_inf>
                <div>
                    <p id="mensaje"> Por favor, inserte el texto de la Imagen </p>
                    <form action="" id="idform"></form>
                    <input type="text" name="name" id="name"><br>
                    <button id=ingCap> Ingresar</button>
                </div>
                <div class="img_captaha">
                    <img src="images/img_captcha.jpg" class="d-flex mx-auto" width="200" height="60" alt="">
                </div>
            </div>
        </section>

        <div class="derecha col xl-2 ">
            <h1 class="textoderecha">Nos comunicaremos con usted a la brevedad. </h1>
            <img class="imgcontacto" src="images/fotocontacto.jpg" alt="">
            <h2 class="textoderecha grey-color">Gracias por elegirnos</h2>
        </div>

    </div>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
