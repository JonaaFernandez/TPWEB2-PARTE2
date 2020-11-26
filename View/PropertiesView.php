<?php

require_once('libs/smarty/Smarty.class.php');

class PropertiesView{
   
    private $title;
    

    function __construct(){
        $this->title = "Tu Inmobiliaria";
        $this->smarty = new Smarty(); 
         if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }         
        if(isset($_SESSION['USERNAME'])){
            $this->smarty->assign('user', $_SESSION['USERNAME']);
        } 
        else if (isset($_SESSION['registrado'])){
            $this->smarty->assign('registrado', $_SESSION['registrado']); 

       }
    } 
    
   
    function ShowHome($log){
        $this->smarty->assign('title', $this->title);
        $this->smarty->assign('log', $log);
        $this->smarty->display('templates/home.tpl');   
   
    }

    function ShowAlquileres($log){
        $this->smarty->assign('log', $log);
        $this->smarty->assign('title', $this->title); 
        $this->smarty->display('templates/alquileres.tpl');   
   
    }

    
    
    function ShowContacto($log){
        $this->smarty->assign('log', $log); 
        $this->smarty->assign('title', $this->title); 
        $this->smarty->display('templates/contacto.tpl'); 
    }

    



function showAll($prop,$typeProp,$log,$nroPag,$nroItems,$PropPorPagina){   //VENTASs
    $this->smarty->assign('title', $this->title); 
    $this->smarty->assign('propiedad', $prop); 
    $this->smarty->assign('tipo', $typeProp);
    $this->smarty->assign('log', $log);
    $this->smarty->assign('pagina', $nroPag);
    $this->smarty->assign('items', $nroItems);
    $this->smarty->assign('propPorPagina', $PropPorPagina);
    $this->smarty->display('templates/listapropiedades.tpl');                
    }

    function showAll2($prop,$typeProp,$log){   //VENTASs
        $this->smarty->assign('title', $this->title); 
        $this->smarty->assign('propiedad', $prop); 
        $this->smarty->assign('tipo', $typeProp);
        $this->smarty->assign('log', $log);
        $this->smarty->display('templates/listapropiedades.tpl');                
        }



     
    

    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }


    function ShowListLocation(){
        header("Location: ".BASE_URL."ventas");
    }

    
    function showformNew($typeProp,$log){
        $smarty = new Smarty(); 
        $smarty->assign('title', 'Alta de Propiedad'); 
        $smarty->assign('tipo', $typeProp); 
        $smarty->assign('log', $log);
        $smarty->display('templates/altaprop.tpl');
    }

    function showOneEdit($prop,$typeProp,$log){
        
        $this->title="Actualizar datos";
        $smarty = new Smarty();  
        $smarty->assign('title', $this->title); 
        $smarty->assign('propiedad', $prop); 
        $smarty->assign('tipo', $typeProp); 
        $smarty->assign('log', $log);
        $smarty->display('templates/showOneEdit.tpl');
       
    }

   
    function ShowError($log, $mensaje = ""){

      
        $this->smarty->assign('title', $this->title);
        $this->smarty->assign('mensaje', $mensaje);  
        $this->smarty->assign('log', $log);
        $this->smarty->display('templates/error.tpl'); 
    
    }

    function showOne($prop,$typeProp,$log){
        $smarty = new Smarty();  
        $smarty->assign('title', 'Datos de la propiedad'); 
        $smarty->assign('propiedad', $prop); 
        $smarty->assign('tipo', $typeProp); 
        $smarty->assign('log', $log);
        $smarty->display('templates/showOne.tpl'); 
    }

    function ShowComentarios(){
        $smarty = new Smarty();  
        $smarty->assign('title', 'Comentarios'); 
        $smarty->display('templates/comentarios.tpl'); 



    }
    function ComentariosPropiedades($log,$data){
        $this->smarty->assign('title', 'Comentarios');
        $this->smarty->assign('log', $log);
        $this->smarty->assign('data', $data);
        $this->smarty->display('templates/comentarios.tpl'); 

    }
}




?>