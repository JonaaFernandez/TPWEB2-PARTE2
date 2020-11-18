<?php

require_once('libs/smarty/Smarty.class.php');

class PropertiesView{
   
    private $title;
    

    function __construct(){
        $this->title = "Tu Inmobiliaria";
        $this->smarty = new Smarty(); 
        /* if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }         
        if(isset($_SESSION['USERNAME'])){
            $this->smarty->assign('user', $_SESSION['USERNAME']);
        } */
    } 
    
   
    function ShowHome($log){
        $this->smarty->assign('title', $this->title);
        $this->smarty->assign('log', $log);
        $this->smarty->display('templates/home.tpl');   
   
    }

    function ShowAlquileres($log){
        $smarty = new Smarty();  
        $smarty->assign('log', $log);
        $smarty->assign('title', $this->title); 
        $smarty->display('templates/alquileres.tpl');   
   
    }

    
    
    function ShowContacto($log){
        $smarty = new Smarty();  
        $smarty->assign('log', $log); 
        $smarty->assign('title', $this->title); 
        $smarty->display('templates/contacto.tpl'); 
    }

    



function showAll($prop,$typeProp,$log){   //VENTAS
    $propiedad=$prop;
    $tipo=$typeProp;
    $smarty = new Smarty();  
    $smarty->assign('title', $this->title); 
    $smarty->assign('propiedad', $prop); 
    $smarty->assign('tipo', $typeProp);
    $smarty->assign('log', $log);
    $smarty->display('templates/listapropiedades.tpl');                
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
        $id=$prop[0]->id;
        $tipo = $prop[0]->tipo;
        $nombre = $prop[0]->nombre;
        $direccion=$prop[0]->direccion;
        $descripcion=$prop[0]->descripcion;
        $fecha=$prop[0]->fecha;
        $valor=$prop[0]->valor; 
        $this->title="Actualizar datos";
        $smarty = new Smarty();  
        $smarty->assign('title', $this->title); 
        $smarty->assign('propiedad', $prop); 
        $smarty->assign('tipo', $typeProp); 
        $smarty->assign('log', $log);
        $smarty->display('templates/showOneEdit.tpl');
       
    }

   
    function ShowError($mensaje = ""){

        $smarty = new Smarty();
        $smarty->assign('title', $this->title);
        $smarty->assign('mensaje', $mensaje);  
        $smarty->display('templates/error.tpl'); 
    
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
}




?>