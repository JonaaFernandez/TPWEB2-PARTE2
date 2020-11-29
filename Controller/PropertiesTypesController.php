<?php
require_once "UserController.php";
require_once "./View/PropertiesTypesView.php";
require_once "./Model/PropertiesTypesModel.php";



class PropertiesTypesController{

    private $cont;
    private $view;
    private $model;
    private $admin = 0;

    function __construct(){
        $this->view = new PropertiesTypesView();
        $this->model = new PropertiesTypesModel();
        $this->cont = new UserController();
    }

   /*   private function checklogueado(){
 
        if (!isset($_SESSION['USERNAME'])){
        header("Location: " . LOGIN);
        die();
        }else{
            if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 190)) { 
               
                $this->cont->LogOut();

            }
            $_SESSION['LAST_ACTIVITY'] = time();
        } 
    } */



   function showAll(){
        $types = $this->model->GetAll();
        $log = $this->cont->checklogueado();
        $user = $this->cont->admin();
        $registrado = $this->cont->registrado();
        $this->view->ShowAllTypes($types,$log,$user,$registrado);
        
    }

    
    function showType($params = null){
        $type = $params[':ID'];
        $oneType= $this->model->getType($type);
        $log = $this->cont->checklogueado();
        $user = $this->cont->admin();
        $registrado = $this->cont->registrado();
        $this->view->ShowOneType($oneType,$log,$user,$registrado); 

    }


    function Insert(){
        $log = $this->cont->checklogueado();
        $user = $this->cont->admin();
        $registrado = $this->cont->registrado();
        if (!$log) { 
            header("Location: " . LOGIN);
            die();
          }
          else {
        
            if ((isset($_POST['input_name'])) && (isset($_POST['input_description'])) && ($_POST['input_name']!= "")  && ($_POST['input_description'] !="" )) {
                $this->model->insert($_POST['input_name'],$_POST['input_description']);
                $this->view->ShowListLocation();
            } else {
                $this->view->showerror($log,$user,$registrado,"Los datos ingresados son incorrectos");
            }
          }
    }


    function delete($params = null){
        /* DUDAS SI EN SHOW LIST LOCATION TAMBIEN VAN LOS PARAMETROS */
        $log = $this->cont->checklogueado();
        $user = $this->cont->admin();
        $registrado = $this->cont->registrado();
        if (!$log) { 
            header("Location: " . LOGIN);
            die();
          }
          else {
            $type_id = $params[':ID'];
            $this->model->delete($type_id);
            $this->view->ShowListLocation();
          }
    }





    function showForEdit($params = null){
        $this->cont->checklogueado();
        $type_id = $params[':ID'];
        $oneType= $this->model->getType($type_id);
        $log = $this->cont->checklogueado();
        $user = $this->cont->admin();
        $registrado = $this->cont->registrado();
        $this->view->ShowOneEdit($oneType,$log,$user,$registrado);
    }


    function Edit(){
        $log = $this->cont->checklogueado();
        $user = $this->cont->admin();
        $registrado = $this->cont->registrado();
        if (!$log) { 
            header("Location: " . LOGIN);
            die();
          }
          else {
        if ((isset($_POST['input_name'])) && (isset($_POST['input_description'])) && ($_POST['input_name']!= "")  && ($_POST['input_description'] !="" )) {
            $this->model->updateType($_POST['input_id'],$_POST['input_name'],$_POST['input_description']);
            $this->view->ShowListLocation();
            }    else {
            $this->view->showerror($log,$user,$registrado,"Los datos ingresados son incorrectos");
            }
          }
    }



}

?>