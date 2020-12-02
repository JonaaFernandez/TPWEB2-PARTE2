{include file="header.tpl"}

{* <option checked value="">.....</option> *}

<title>{$this->title}</title>
</head>

<body>
    <h1 class="mt-4">{$title}</h1>

    <div class="container">

        <ul class="list-group">
        </ul>
    </div>

    
    <form action="editar" method="POST"  aria-describedby="inmput_name"  enctype="multipart/form-data">
    <div class="container d-flex flex-row" >
        <div class="w-50 p-3" name="izquierdo"> 
                <div class="form-group">
                    <label for="title">Tipo de Propiedad </label>

                    <select name="input_type" id="">

                        {foreach from=$tipo item=tp}
                            <option value="{$tp->id}" {if {$tp->id} == {$propiedad[0]->tipo}}
                                    {" selected"}
                                {/if}
                                >{$tp->nombre}</option>
                        {/foreach}


                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" name="input_id" value="{$propiedad[0]->id}">
                    <label for="title">Nombre</label>
                    <input class="form-control text-left" id="nombre" name="input_name" aria-describedby="input_name" value=" {$propiedad[0]->nombre}  ">
                </div>
                <div class="form-group">
                    <label for="title"> Direccion </label>

                    <input class="form-control text-left" id="adress" name="input_adress" aria-describedby="input_adress" value=" {$propiedad[0]->direccion}">

                </div>
                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <input class="form-control text-left" id="description" name="input_description" value="{$propiedad[0]->descripcion}">
                </div>
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="number text-left" class="form-control" id="value" name="input_value" value="{$propiedad[0]->valor}">
                </div>
                <div class="form-group">
                    <label for="Fecha de Ingreso">Fecha de Ingreso</label>
                    <input type="date" class="form-control" id="input_date" name="input_date" value="{$propiedad[0]->fecha}">
                </div>  
            </div>
            <div class="w-50 p-3" name="derecho">  
                <div class="body-bgc col-lg-12 d-flex justify-content-around min height=130px">
                   <p></p>
                <div class="form-group">
              
                        {$imagen=$propiedad[0]->imagen} 
                        
                        <input type="hidden"  name="nombreImg"  value="{$imagen}">
                       {if $imagen} 
                    
                            <img width="300px" height="300px" src="uploads/{$imagen}">
                        <p></p>
                        <label class="form-check-label bg-dark text-light border border-primary ml-4 p-2 " for="input_imagen"> Borrar Imagen</label>     
                        <input type="checkbox"  name="borrarImagen" >
                        {* <input type="file" class="mt-4  bg-dark text-light p-1 border border-primary" id="input_imagen" name="img">  *}

                     {else}  
                     <div class="form-group mt-4">   
                        <h3>Insertar Imagen</h3>  
                        <input type="file" class="mt-4  bg-dark text-light p-1 border border-primary" id="input_imagen" name="img" >  
                    </div>
                    {/if} 
                    </div>      
                </div>
                  
            </div>
        </div>       
        <button type="submit" class=" mx-auto d-flex btn btn-primary mt-2 bg-dark">Editar</button>
        </form>
        </div>               
        
    </div>



    {include file="footer.tpl"}