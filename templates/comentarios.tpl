{include file="header.tpl"}

<h1>{$title}</h1>



<div>
    {foreach from=$data item=prop} {* propiedades *}
        <tr>
            <td class="th-tipo text-center pl-5 th-prop th-prop-largo pl-5">
               Propiedad:  {$prop->nombre}
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

<div>
<p></p>
    <table id="tablaComentarios" >
        <thead>
            <tr>
                <th class="th-tipo text-center th-prop th-prop-largo11 
                ">Comentarios</th>
                <th class="th-tipo text-center th-prop th-prop-largo">Puntaje</th>
                {* verificar si es admin para mostrar*}
                {if isset ($user)}
                <th class="th-tipo text-center th-prop th-prop-largo">Borrar comentarios</th>
                {/if}
            </tr>
       
            
        </thead>
        <tbody id="aparecer-comentarios" class="th-tipo text-center th-prop th-prop-largo">

        </tbody>
    </table>

</div>



<script src="./js/comentarios.js"></script>
<link rel="stylesheet" href="../css/estilocomun.css">

{include file="footer.tpl"}