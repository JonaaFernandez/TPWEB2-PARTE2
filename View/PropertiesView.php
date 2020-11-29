<?php

require_once('libs/smarty/Smarty.class.php');

class PropertiesView{
   
    private $title;
    

    function __construct(){
        $this->title = "Tu Inmobiliaria";
        $this->smarty = new Smarty(); 
         
    } 
    
   
    function ShowHome($log,$user,$registrado){
        $this->smarty->assign('title', $this->title);
        $this->smarty->assign('user',$user);
        $this->smarty->assign('registrado', $registrado);
        $this->smarty->assign('log', $log);
        $this->smarty->display('templates/home.tpl');   
   
    }

    function ShowAlquileres($log,$user,$registrado){
        $this->smarty->assign('log', $log);
        $this->smarty->assign('user',$user);
        $this->smarty->assign('registrado', $registrado);
        $this->smarty->assign('title', $this->title); 
        $this->smarty->display('templates/alquileres.tpl');   
   
    }

    
    
    function ShowContacto($log,$user,$registrado){
        $this->smarty->assign('log', $log); 
        $this->smarty->assign('user', $user); 
        $this->smarty->assign('registrado', $registrado); 
        $this->smarty->assign('title', $this->title); 
        $this->smarty->display('templates/contacto.tpl'); 
    }

    



function showAll($prop,$typeProp,$log,$nroPag,$nroItems,$PropPorPagina,$user,$registrado){   //VENTASs
    $this->smarty->assign('title', $this->title); 
    $this->smarty->assign('propiedad', $prop); 
    $this->smarty->assign('user', $user);
    $this->smarty->assign('registrado', $registrado);
    $this->smarty->assign('tipo', $typeProp);
    $this->smarty->assign('log', $log);
    $this->smarty->assign('pagina', $nroPag);
    $this->smarty->assign('items', $nroItems);
    $this->smarty->assign('propPorPagina', $PropPorPagina);
    $this->smarty->display('templates/listapropiedades.tpl');                
    }

    function ShowTypesProp($prop,$typeProp,$log,$id,$nroPag,$nroItems,$PropPorPagina,$user,$registrado){   //VENTASs
        $this->smarty->assign('title', $this->title); 
        $this->smarty->assign('propiedad', $prop); 
        $this->smarty->assign('tipo', $typeProp);
        $this->smarty->assign('log', $log);
        $this->smarty->assign('user', $user);
        $this->smarty->assign('registrado', $registrado);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('pagina', $nroPag);
        $this->smarty->assign('items', $nroItems);
        $this->smarty->assign('propPorPagina', $PropPorPagina);
        $this->smarty->display('templates/busquedaportipo.tpl');                
        }



    

    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }


    function ShowListLocation(){
        header("Location: ".BASE_URL."mostrarpagina/1");
    }

    
    function showformNew($typeProp,$log,$user,$registrado){
        $smarty = new Smarty(); 
        $smarty->assign('title', 'Alta de Propiedad'); 
        $smarty->assign('tipo', $typeProp); 
        $smarty->assign('user', $user); 
        $smarty->assign('registrado', $registrado); 
        $smarty->assign('log', $log);
        $smarty->display('templates/altaprop.tpl');
    }

    function showOneEdit($prop,$typeProp,$log,$user,$registrado){      
        /* ES NECESARIO UN NUEVO SMARTY? */
        $this->title="Actualizar datos";
        $smarty = new Smarty();  
        $smarty->assign('title', $this->title); 
        $smarty->assign('propiedad', $prop); 
        $smarty->assign('tipo', $typeProp); 
        $smarty->assign('log', $log);
        $smarty->assign('user', $user);
        $smarty->assign('registrado', $registrado);
        $smarty->display('templates/showOneEdit.tpl');
       
    }

   
    function ShowError($log,$user,$registrado, $mensaje = ""){   
        $this->smarty->assign('title', $this->title);
        $this->smarty->assign('mensaje', $mensaje);  
        $this->smarty->assign('user', $user); 
        $this->smarty->assign('registrado', $registrado); 
        $this->smarty->assign('log', $log);
        $this->smarty->display('templates/error.tpl'); 
    
    }

    function showOne($prop,$typeProp,$log,$user,$registrado){
        $smarty = new Smarty();  
        $smarty->assign('title', 'Datos de la propiedad'); 
        $smarty->assign('propiedad', $prop); 
        $smarty->assign('tipo', $typeProp); 
        $smarty->assign('user', $user); 
        $smarty->assign('registrado', $registrado); 
        $smarty->assign('log', $log);
        $smarty->display('templates/showOne.tpl'); 
    }

    function ShowComentarios(){
        $smarty = new Smarty();  
        $smarty->assign('title', 'Comentarios'); 
        $smarty->display('templates/comentarios.tpl'); 



    }
    function ComentariosPropiedades($log,$data,$user,$registrado){
        $this->smarty->assign('title', 'Comentarios');
        $this->smarty->assign('log', $log);
        $this->smarty->assign('data', $data);
        $this->smarty->assign('user', $user);
        $this->smarty->assign('registrado', $registrado);
        $this->smarty->display('templates/comentarios.tpl'); 

    }
    

    function ShowSearchAv($prop,$typeProp,$log,$nroPag,$nroItems,$PropPorPagina,$patron,$user,$registrado){

        $this->smarty->assign('title', $this->title); 
        $this->smarty->assign('propiedad', $prop); 
        $this->smarty->assign('tipo', $typeProp);
        $this->smarty->assign('log', $log);
        $this->smarty->assign('pagina', $nroPag);
        $this->smarty->assign('user', $user);
        $this->smarty->assign('registrado', $registrado);
        $this->smarty->assign('items', $nroItems);
        $this->smarty->assign('propPorPagina', $PropPorPagina);
        $this->smarty->assign('patron', $patron);
        $this->smarty->display('templates/resultBusqueda.tpl');                
    }

}




?>