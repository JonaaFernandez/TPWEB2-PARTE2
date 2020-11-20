<?php
require_once "./controller/UserController.php";
require_once "./libs/smarty/Smarty.class.php";

class UserView{

    private $title;
    

    function __construct(){
        $this->title = "Log In";
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

    function showAll($users,$log,$user){   // muestra todos los tipos de propiedad
         
        $this->smarty->assign('title', $this->title); 
        $this->smarty->assign('log', $log);
        $this->smarty->assign('usuarios', $users);
        $this->smarty->assign('user', $user);
        $this->smarty->display('templates/listaUsers.tpl');
    
        }


    function ShowLogin($log, $message = ""){

/*         $smarty = new Smarty(); */
        $this->smarty->assign('title', $this->title);
        $this->smarty->assign('message', $message);  //muestra mensaje de error
        $this->smarty->assign('log',$log);
        $this->smarty->display('templates/login.tpl'); // muestro el template 
    
    }


    function backHome(){       
        header("Location: ".BASE_URL."home");
        
    }

    function NewUser(){
    /*     $smarty = new Smarty(); */
        $this->smarty->assign('title', 'Sign up');
        $this->smarty->display('templates/signup.tpl'); 
    }

    function ShowOneUser($User,$log){
        $this->smarty->assign('title', 'Usuarios');
        $this->smarty->assign('OneUser', $User); 
        $this->smarty->assign('log', $log); 
        $this->smarty->display('templates/ShowOneUser.tpl'); 
    } 

    function ModifyUser($OneUser,$log){
        $this->smarty->assign('title', 'Usuarios');
        $this->smarty->assign('Oneuser', $OneUser); 
        $this->smarty->assign('log', $log); 
        $this->smarty->display('templates/modifyUser.tpl'); 
    }

    function ShowError($log, $user, $mensaje = ""){

        $smarty = new Smarty();
        $smarty->assign('title', $this->title);
        $smarty->assign('mensaje', $mensaje);  
        $smarty->assign('log', $log);
        $smarty->assign('user', $user);
        $smarty->display('templates/error.tpl'); 
    
    }
}


?>