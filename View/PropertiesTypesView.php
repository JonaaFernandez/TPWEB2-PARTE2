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
        else if (isset($_SESSION['registrado'])){
            $this->smarty->assign('registrado', $_SESSION['registrado']); 

       }
    } 
 
    



function showAllTypes($type,$log,$user,$registrado){   // muestra todos los tipos de propiedad
    $tipo=$type;
    $this->smarty->assign('title', $this->title); 
    $this->smarty->assign('tipito', $tipo);
    $this->smarty->assign('user', $user);
    $this->smarty->assign('registrado', $registrado);
    $this->smarty->assign('log', $log);
    $this->smarty->display('templates/listaTipos.tpl');

    }



    function ShowListLocation(){
        header("Location: ".BASE_URL."verTodosLosTipos");
    }



    function ShowOneType($oneType,$log,$user,$registrado){
        $smarty = new Smarty();  
        $smarty->assign('title', $this->title); 
        $smarty->assign('tipo', $oneType);
        $smarty->assign('log', $log);
        $smarty->assign('user', $user);
        $smarty->assign('registrado', $registrado);
        $smarty->display('templates/showOneType.tpl');

    }
        


    function ShowOneEdit($oneType,$log,$user,$registrado){
        $smarty = new Smarty();  
        $smarty->assign('title', $this->title); 
        $smarty->assign('tipo', $oneType);
        $smarty->assign('log', $log);
        $smarty->assign('user', $user);
        $smarty->assign('registrado', $registrado);
        $smarty->display('templates/showFormEdit.tpl');

    }


    function ShowError($log,$user,$registrado, $mensaje = ""){

        $smarty = new Smarty();
        $smarty->assign('title', $this->title);
        $smarty->assign('mensaje', $mensaje);  
        $smarty->assign('log', $log);
        $smarty->assign('user', $user);
        $smarty->assign('registrado', $registrado);
        $smarty->display('templates/error.tpl'); 
    
    }
    

}




?>