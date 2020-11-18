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

}


?>