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

    public function checklogueado(){ // CHEQUEA EL ESTADO DE LA SESION Y SU ULTIMA ACIVIDAD

        if (!isset($_SESSION['USERNAME'])){

            return 0;
        }else{
            if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300)) { 
        
                $this->LogOut();
                return 0;
            }else{
            $_SESSION['LAST_ACTIVITY'] = time();
            return 1;
            }   
        } 
    }

    public function admin(){
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }         
            if(isset($_SESSION['USERNAME'])){
            return ($_SESSION['USERNAME']);
        } 
          
    }

    public function registrado(){
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }         
        if (isset($_SESSION['registrado'])){
        return ($_SESSION['registrado']); 
        }
    }
    public function Login(){
        $this->view->ShowLogin(0,'');

    }

    function VerifyUser(){
  
        $user = $_POST['input_user'];
        $passw = $_POST['input_password'];
       /*  $email = $_POST["input_email"]; */

        if(isset($user)){
            $log = $this->checklogueado();
            $userFromDB= $this->model->Getuser($user);
            
            if(isset($userFromDB) && $userFromDB){               
                if(password_verify($passw, $userFromDB->password)){
                    if ($userFromDB->admin == 1){
                        session_start();
                        $_SESSION['USERNAME'] = $user; /* $userFromDB->user; */
                        $_SESSION['LAST_ACTIVITY'] = time();
                         $this->view->BackHome();     
                    }
                   else if( $userFromDB->admin ==0){
                    session_start();
                    $_SESSION['registrado'] = $user; /* $userFromDB->user; */
                    $_SESSION['LAST_ACTIVITY'] = time();
                     $this->view->BackHome();     
                   }
                  

                          
                }else{
                    $this->view->ShowLogin($log,"Contraseña Incorrecta");                   
                }
            }else{
                $this->view->ShowLogin($log,"Usuario Inexistente");             
            }
        }     
    }



    function LogOut(){
        session_start();
        session_destroy();
        $this->view->BackHome();  
    }
   

   function SignUp(){
        $log = $this->checklogueado();
        $newUser = $_POST['input_user'];
        $newPassw = $_POST['input_password'];
        $newEmail = $_POST["input_email"]; 

        if(isset($newUser) && ($newUser!='')){
            $userFromDB= $this->model->Getuser($newUser);
            if($userFromDB){
                $this->view->ShowLogin($log,"El usuario ya existe"); 
                die();
            }
            else{
            
                if(isset($newPassw) && ($newPassw!='')){
                $hash = password_hash($newPassw, PASSWORD_DEFAULT);
                $this->model->InsertUser($newUser,$newEmail,$hash);  
                session_start();    
                $_SESSION['registrado']= $newUser;
                $_SESSION['LAST_ACTIVITY'] = time();    
                $this->view->BackHome();
                }else{
                    $this->view->ShowLogin($log,"Contraseña nula o invalida"); 
                    die();                  
                }
            }
        }
            else{
                $this->view->ShowLogin($log,"Usuario nulo o invalido"); 
                die();             
            }
            
     }

    public function ShowAllUsers(){
        $users = $this->model->GetAll();
        $log = $this->checklogueado();
        if ($log) {
            $user= $_SESSION['USERNAME'];
            $this->view->ShowAll($users,$log,$user); 
        } else {
            $user= $_SESSION['registrado'];
            $this->view->showerror($log , $user, "No tiene permisos de administrador");
         /*    header("Location: " . LOGIN); */
          die();
        }
    }

    function newUser(){
            $this->view->NewUser();
    }

    function viewOneUser($params = null){
            $id = $params[':ID'];
            $Oneuser = $this->model->GetOneUser($id);
            $log = $this->checklogueado();
           
                if($log){
                    $this->view->ShowOneUser($Oneuser,$log);    
                }
    }

    function SaveUser(){
             $user= $_SESSION['USERNAME'];
             $log= $this->checklogueado(); 
            if (!$log) { 
                header("Location: " . LOGIN);
                die();
              }
              else {
            if ((isset($_POST['input_user'])) && (isset($_POST['input_email'])) && (isset($_POST['input_admin'])) && ($_POST['input_user']!= "") && ($_POST['input_email'] !="" ) && ($_POST['input_admin'] !="" )) {
                $this->model->ModifUser($_POST['input_id'],$_POST['input_user'],$_POST['input_email'] ,$_POST['input_admin']) ;
                
                $this->ShowAllUsers($log);
            }    
            else {
                $this->view->showerror($log , $user, "Los datos ingresados son incorrectos");
            }
        }
    }
     
    function modificarUsr($params = null){
            $log = $this->checklogueado();
            $id = $params[':ID'];
            if ($log){
                $Oneuser = $this->model->GetOneUser($id);
                $user= $_SESSION['USERNAME'];
                $userFromDB= $this->model->Getuser($user);
                $admin = $userFromDB->admin;
                
                if ($admin == 1){
                    $this->view->ModifyUser($Oneuser,$log);    
                }
                else{
                    $this->view->ShowError($log, $user, "No tiene permisos para realizar la operacion");
                }
            }
            else{
                header("Location: " . LOGIN);
            }
    }
        
    function DeleteUser($params = null) {
        $log = $this->checklogueado();
        $id = $params[':ID'];
        if ($log){
            $user= $_SESSION['USERNAME'];
            $userFromDB= $this->model->Getuser($user);
            $admin = $userFromDB->admin;
            if ($admin == 1){
                $this->model->DeleteOneUser($id);
                $this->ShowAllUsers();
            }
            else{
                $this->view->ShowError($log,$user,  "No tiene permisos para realizar la operacion");
            }
        }
        else{
            header("Location: " . LOGIN);

        }
        
    }
    
}

?>