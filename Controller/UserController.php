<?php

require_once "./View/UserView.php";
require_once "./Model/UserModel.php";

class UserController{

    private $view;
    private $model;
    private $admin;


    function __construct(){
        $this->title = "Tu Inmobiliaria";
        $this->view = new UserView();
        $this->model = new UserModel();

    }

    
    function checklogueado(){ // CHEQUEA EL ESTADO DE LA SESION Y SU ULTIMA ACIVIDAD

        if (!isset($_SESSION['USERNAME'])){
            
        header("Location: " . LOGIN);
        die();
        }else{
            if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300)) { 
        
                $this->cont->LogOut();

            }
            $_SESSION['LAST_ACTIVITY'] = time();
        } 
    } 

    function Login(){
        $this->view->ShowLogin();

    }

    function VerifyUser(){
  
        $user = $_POST['input_user'];
        $passw = $_POST['input_password'];
       /*  $email = $_POST["input_email"]; */

        if(isset($user)){
            $userFromDB= $this->model->Getuser($user);
            
            if(isset($userFromDB) && $userFromDB){               
                if(password_verify($passw, $userFromDB->password)){
                    
                    session_start();
                   
                    $_SESSION['USERNAME'] = $user; /* $userFromDB->user; */
                    $_SESSION['LAST_ACTIVITY'] = time();
                     $this->view->BackHome();     

                          
                }else{
                    $this->view->ShowLogin("Contraseña Incorrecta");                   
                }
            }else{
                $this->view->ShowLogin("Usuario Inexistente");             
            }
        }     
    }

    function LogOut(){
        session_start();
        session_destroy();
        $this->view->BackHome();  
    }
   

   function SignUp(){
        $newUser = $_POST['input_user'];
        $newPassw = $_POST['input_password'];
        $newEmail = $_POST["input_email"]; 

        if(isset($newUser) && ($newUser!='')){
            $userFromDB= $this->model->Getuser($newUser);
            if($userFromDB){
                $this->view->ShowLogin("El usuario ya existe"); 
                die();
            }
            else{
            
                if(isset($newPassw) && ($newPassw!='')){
                $hash = password_hash($newPassw, PASSWORD_DEFAULT);
                $this->model->InsertUser($newUser,$newEmail,$hash);  
                session_start();    
                $_SESSION['USERNAME']= $newUser;
                $_SESSION['LAST_ACTIVITY'] = time();    
                $this->view->BackHome();
                }else{
                    $this->view->ShowLogin("Los datos ingresados son incorrectos");                   
                }
            }
        }
            else{
                $this->view->ShowLogin("Los datos ingresados son incorrectos");             
            }
          
   }
        function newUser(){
            $this->view->NewUser();
        }


    }
    

?>