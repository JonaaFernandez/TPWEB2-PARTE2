{include file="header.tpl"}
<p> logueado???? {$log} </p>
<div class="container body-bgc">
    {if isset($user)}
        <h2 class="display-4 text-capitalize grey-color container"> Administrar </h2>
    {/if}
    {if !isset($user)}
        <h2 class="display-4 text-capitalize grey-color container">Propiedades en venta </h2>
    {/if}

    <div class="body-bgc col-lg-12 d-flex ">
        {* <div class=""> *}
            <ul class="col-lg-10 body-bgc mt-4 font-weight-bold  ">
                {foreach from=$propiedad item=tipoprop} {* propiedades *}
                    {* <li class="col-lg-12  p-2 container body-bgc rounded mb-4">
                        *}
                        <div class="body-bgc col-lg-12  border border-dark mt-2 mb-2 d-flex justify-content-between">
                            <div class="">
                    <li class="list-group"> ID: {$tipoprop->id}</li>
                    {foreach from=$tipo item=tipos} {* tipos de propiedad *}
                        {if ($tipos->id == $tipoprop->tipo)}
                            <li class="list-group">TIPO DE PROPIEDAD: {$tipos->nombre}</li>
                        {/if}
                    {/foreach}
                    <li class="list-group"> NOMBRE: {$tipoprop->nombre}</li>
                    <li class="list-group"> VALOR : U$S {$tipoprop->valor}</li>
                    {$imagen = $tipoprop->imagen}
                    {* <p class="body-bgc"> </p> *}
    
                    <div class="acciones body-bgc d-flex">
                        <a href="ver/{$tipoprop->id}" class="p-1 m-1 bg-dark ancho-ver text-center "> VER </a>
                        <a href="modificar/{$tipoprop->id}" class="p-1 m-1 bg-dark ancho-modif text-center"> MODIFICAR </a>
                        <a href="eliminar/{$tipoprop->id}" class=" p-1 m-1 bg-dark ancho-ver text-center"> ELIMINAR </a>
                        <a href="coments/{$tipoprop->id}" class=" p-1 m-1 bg-dark ancho-comentario text-center"> COMENTARIOS </a>
                        <p></p>
                    </div>
            </div>
            <div class="">
                {if $imagen}
                    <img class="mt-2 " width="120px" height="120px" src="uploads/{$imagen}">
                {else}
                    <p class="mt-5"> Imagen no disponible </p>
                {/if}
            </div>
    
        </div>
        </li>
    {/foreach}
    </ul>
{* </div> *}
</div>
<p></p>
<div class="container">
    <div class="container">
        <form action="mostrarPorTipo" method="POST">
            <div class="form-group mr-5">
                <label for="title" class="offset-1 ">Seleccione el tipo de Propiedad </label>
                <select name="input_type" id="">
                    {foreach from=$tipo item=tp}
                        <option value="{$tp->id}"> {$tp->nombre} </option>
                    {/foreach}
                </select>
                <button type="submit" class="ml-3 btn btn-primary bg-dark">Seleccionar</button>

            </div>
        </form>
    </div>
    {* SOLO PARA ADMIN *}
    {if isset($user)}
        <div class=" container mt-4 row">
            <p class=" gris-color h2 ml-1"> Dar de alta </p>
            <form action="alta" method="get">
                <div class=" d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary bg-dark ml-4">Continuar</button>
                </div>
            </form>
        </div>
    </div>
{/if}
</div>
{include file="footer.tpl"}