{include file="header.tpl"}
<p> logueado???? {$log} </p>
<div class="w-75 mx-auto  body-bgc">
    {if isset($user)}
        <h2 class="display-4 text-capitalize grey-color container"> Administrar </h2>
    {/if}
    {if !isset($user)}
        <h2 class="display-4 text-capitalize grey-color container">Propiedades en venta </h2>
    {/if}
 
    <div class=" body-bgc">
        <ul class=" body-bgc ">
            {foreach from=$propiedad item=tipoprop} {* propiedades *}    
                <li class=" container body-bgc border">       
                            ID: {$tipoprop->id}</br>
                {foreach from=$tipo item=tipos} {* tipos de propiedad *}
                            {if ($tipos->id == $tipoprop->tipo)}
                            TIPO DE PROPIEDAD: {$tipos->nombre} <br>
                            {/if}
                {/foreach}
                NOMBRE: {$tipoprop->nombre} <br>
                VALOR : U$S {$tipoprop->valor}</br>
                <p class="body-bgc"> </p>
                    
                <div class="acciones body-bgc">
                    <a href="ver/{$tipoprop->id}" class="p-1 m-1 bg-dark ancho-ver "> VER </a>
                    <a href="modificar/{$tipoprop->id}" class="p-1 m-1 bg-dark ancho-modif"> MODIFICAR </a>
                    <a href="eliminar/{$tipoprop->id}" class=" p-1 m-1 bg-dark ancho-ver"> ELIMINAR </a>
                    <a href="coments/{$tipoprop->id}" class=" p-1 m-1 bg-dark ancho-comentario"> COMENTARIOS </a>
                    <p></p>
                </div>
            </li>     
            {/foreach}
        </ul>
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

{include file="footer.tpl"}