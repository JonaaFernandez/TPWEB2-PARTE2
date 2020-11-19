{include file="header.tpl"}


<title>{$this->title}</title>

<h1 class="mt-3">{$title}</h1>

<div class="container">


</div>

<div class="container color-gris">

    <div class="form-group w-25">
        <label for="title">ID</label>
        <label class="form-control" value=""> {$OneUser->id} </label>
    </div>      
    <div class="form-group">
        <label for="title">Nombre</label>
        <label for="title" class="form-control w-25" id="nombre" name="input_name" aria-describedby="input_name"> {$OneUser->user}</label>
    </div>
    <div class="form-group">
        <label for="title"> Email </label>

        <label for="title" class="form-control w-25" id="adress" name="input_adress" aria-describedby="input_adress" value="">{$OneUser->email}</label>

    </div>
    <div class="form-group">
        <label for="description">Categoria</label>
        {if $OneUser->admin == 0}
            <label for="title" class="form-control w-75" id="description" name="input_description" value=""> Usuario </label>
        {else}
        <label for="title" class="form-control w-75" id="description" name="input_description" value=""> Administrador </label>
        {/if}
    </div> 
   <a href="usuarios" type="button" class="btn btn-primary  ml-0 bg-dark" value="volver" > VOLVER </a>
</div>









{include file="footer.tpl"}