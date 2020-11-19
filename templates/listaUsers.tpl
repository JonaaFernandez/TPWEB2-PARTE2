{include file="header.tpl"}

<div class="container">

<h2 class="display-4 text-capitalize grey-color container mt-4 mb-4">  </h2> 


    <table class="font-size-tabla  ml-2 mt-4 tabla">
        <th class="th-tipo text-center th-prop th-prop-largo"> NUMERO </th>
        <th class="th-nombre text-center th-prop th-prop-largo ">NOMBRE</th>
        <th class="th-valor text-center th-prop th-prop-largo ">EMAIL</th>
        <th class="th-valor text-center th-prop th-prop-largo ">TIPO</th>
        <th class="th-valor text-center th-prop th-acciones "> </th>
        <th class="th-valor text-center th-prop th-acciones "> ACCIONES</th>
        <th class="th-valor text-center th-prop th-acciones th-borde-right "> </th>
 
        {foreach from=$usuarios item=usr} {* Usuarios*}
            <tr>
                {* <td class="td-prop text-center "> *}
                <td class="td-prop text-center">{$usr->id}</td>
                <td class="td-prop text-center">{$usr->user}</td>
                <td class="td-prop text-center">{$usr->email}</td>
                {if $usr->admin == 0}
                    <td class="td-prop text-center">Usuario</td>
                {else}
                <td class="td-prop text-center">Administrador</td>
                {/if}

                <div class="acciones">
                    <td class="p-0 border-btn "> <a href="verUsr/{$usr->id}" class="p-1 m-1 bg-dark ancho-ver "> VER </td> 
                    <td class="p-0 border-btn "> <a href="modificarUsr/{$usr->id}" class="p-1 m-1 bg-dark ancho-modif"> MODIFICAR </td>
                    <td class="p-0 th-borde-right border-btn"> <a href="eliminarUsr/{$usr->id}" class=" p-1 m-1 bg-dark ancho-ver"> ELIMINAR </td>
    
            </div>

        </tr>
        {/foreach}
    </table>
</div>
{include file="footer.tpl"}