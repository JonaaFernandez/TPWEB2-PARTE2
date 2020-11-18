<?php

require_once('libs/smarty/Smarty.class.php');


class PropertiesTypesView{
   
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
    } 
 
    



function showAllTypes($type,$log){   // muestra todos los tipos de propiedad
    $tipo=$type;
    $smarty = new Smarty();  
    $smarty->assign('title', $this->title); 
    $smarty->assign('tipito', $tipo);
    $smarty->assign('log', $log);
    $smarty->display('templates/listaTipos.tpl');

    }



    function ShowListLocation(){
        header("Location: ".BASE_URL."verTodosLosTipos");
    }



    function ShowOneType($oneType,$log){
        $smarty = new Smarty();  
        $smarty->assign('title', $this->title); 
        $smarty->assign('tipo', $oneType);
        $smarty->assign('log', $log);
        $smarty->display('templates/showOneType.tpl');

    }
        


    function ShowOneEdit($oneType,$log){
        $smarty = new Smarty();  
        $smarty->assign('title', $this->title); 
        $smarty->assign('tipo', $oneType);
        $smarty->assign('log', $log);
        $smarty->display('templates/showFormEdit.tpl');

    }


    function ShowError($log, $mensaje = ""){

        $smarty = new Smarty();
        $smarty->assign('title', $this->title);
        $smarty->assign('mensaje', $mensaje);  
        $smarty->assign('log', $log);
        $smarty->display('templates/error.tpl'); 
    
    }
    

}




?>