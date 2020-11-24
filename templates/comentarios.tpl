{include file="header.tpl"}

<h1>{$title}</h1>



<div class="container font-weight-bold">
    {foreach from=$data item=prop} {* propiedades *}
        <tr>
            <td class="th-tipo text-center pl-5 th-prop th-prop-largo pl-5">
                Propiedad: {$prop->nombre}
            </td>
        </tr>
        <input type="hidden" name="idComentarioProp" value="{$prop->id}">
    {/foreach}

    {if isset($user)}
        <input type="hidden" name="usuarioConectado" value="{$user}">
    {/if}

    {if isset($user) || isset($registrado)}
        <form action="" id="agregarcomentario" method="post">
    
            <textarea name="comentario" id="" cols="30" rows="1" class="th-tipo text-center th-prop th-prop-largo"></textarea>
    
            <select name="puntaje" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
    
            </select>
            {foreach from=$data item=prop}
                <input type="hidden" name="idAborrar" value="{$prop->id}">
            {/foreach}
            <button type="submit">Agregar Comentario</button>
    
        </form>
    {/if}
</div>

<div class="container col-lg-11">
    <p></p>
    <table id="tablaComentarios">
        <thead>
            <tr>
                <th class="th-tipo text-center th-prop th-prop-largo text-light col-lg-9">Comentarios</th>
                <th class="th-tipo text-center th-prop th-prop-largo  text-light col-lg-1">Puntaje</th>
                {* verificar si es admin para mostrar*}
                {if isset ($user)}
                    <th class="th-tipo text-center th-prop th-prop-largo text-light">Borrar comentarios</th>
                {/if}
            </tr>
            

        </thead>
        <tbody id="aparecer-comentarios" class="th-tipo text-center th-prop th-prop-largos">


                            {* ACA COMIENZA A GENERARSE LA TABLA DESDE JS *}



        </tbody>
    </table>
    
    <a href="ventas" type="button" class="btn btn-primary  ml-0 bg-dark mt-4" value="volver"> VOLVER </a>
</div>



<script src="./js/comentarios.js"></script>
<link rel="stylesheet" href="../css/estilocomun.css">

{include file="footer.tpl"}