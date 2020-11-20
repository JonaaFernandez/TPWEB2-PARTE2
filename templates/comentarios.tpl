{include file="header.tpl"}

<h1>{$title}</h1>



<div>
    {foreach from=$data item=tipoprop} {* propiedades *}
        <tr>
            <td class="td-prop text-center ">
                {$tipoprop->nombre}
            </td>
        </tr>
        <input type="hidden" name="idComentarioProp" value="{$tipoprop->id}">
    {/foreach}

{if isset($user)}
    <input type="hidden" name="usuarioConectado" value="{$user}">
{/if}

{if isset($user) || isset($registrado)}
    <form action="" id="agregarcomentario" method="post">

        <textarea name="comentario" id="" cols="30" rows="1"></textarea>

        <select name="puntaje" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>

        </select>
        {foreach from=$data item=tipoprop}
            <input type="hidden" name="idAborrar" value="{$tipoprop->id}">
        {/foreach}
        <button type="submit">Agregar Comentario</button>

    </form>
    {/if}
</div>

<div>

    <table id="tablaComentarios">
        <thead>
            <tr>
                <th>Comentarios</th>
                <th>Puntaje</th>
                {* verificar si es admin para mostrar*}
                {if isset ($user)}
                <th>Borrar comentarios</th>
                {/if}
            </tr>
        </thead>
        <tbody id="aparecer-comentarios">

        </tbody>
    </table>

</div>



<script src="./js/comentarios.js"></script>


{include file="footer.tpl"}