{include file="header.tpl"}


<h1 class="mt-4"> Modificar Datos</h1>
<div class="container mt-4">

    <form action="ConfirmarModUsr" method="post">

        <div class="form-group">
            {* <label for="title">ID</label> *}
            <input type="hidden" class="form-control w-25 ml-5" name="input_id" value="{$Oneuser->id}">
        </div>

        <div class="form-group">
            <label for="title">Nombre</label>
            <input type="text" class="form-control w-25 ml-2" name="input_user" value="{$Oneuser->user}">
        </div>
        <div class="form-group">
            <label for="title">Email</label>
            <input type="text" class="form-control w-50 ml-4" name="input_email" value="{$Oneuser->email}">
        </div>
        <div class="form-group">
            <label for="title">Categoria</label>
            <select name="input_admin" id="">
                <option value="0"> Usuario </option>
                <option value="1"> Administrador </option>
            </select>

            {* <input type="text" class="form-control w-75 ml-4" name="input_admin" value="{$Oneuser->admin}"> *}
        </div>
        <button type="submit" class="btn btn-primary bg-dark">Confirmar Cambios</button>

    </form>
</div>

{include file="footer.tpl"}