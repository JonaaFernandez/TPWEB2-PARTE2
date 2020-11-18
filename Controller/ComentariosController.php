<?php
require_once "UserController.php";
require_once "./View/PropertiesView.php";
require_once "./Model/CommentModel.php";
require_once "./Model/PropertiesModel.php";


class ComentariosController{

    private $propmodel;
    private $view;
    private $model;
    private $coment;

    function __construct(){
        /* $this->view = new ComentariosView(); */
        $this->model = new CommentModel();
        $this->user = new UserController();
        $this->propmodel = new PropertiesModel();

    }

     private function checklogueado(){ 

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


  /*   function Home(){
  
     $this->view->ShowHome();
    }

    function Alquileres(){
     $this->view->ShowAlquileres();
    }

     
    function Contacto(){
     $this->view->ShowContacto();
    }

    function showAllProp(){ 
     $prop = $this->model->GetAllProp();
     $typeProp = $this->typeModel->GetAll();
    $this->view->ShowAll($prop,$typeProp);
    }

    
    function cargaProp($params = null){
     $this->checklogueado();
     $prop_id = $params[':ID'];
     $prop = $this->model->GetProp($prop_id);
     $typeProp = $this->typeModel->GetAll();
     $this->view->ShowOneEdit($prop,$typeProp);
        
    }

   

 
  
    function InsertProp(){
        $this->checklogueado();
        if ((isset($_POST['input_name'])) && (isset($_POST['input_value'])) && ($_POST['input_name']!= "")  && ($_POST['input_value'] !="" )) {
             $typeProp = $this->typeModel->GetAll();
             $this->model->insertProp($_POST['input_type'],$_POST['input_name'],$_POST['input_adress'],$_POST['input_description'],$_POST['input_value'],$_POST['input_date']);
             $this->view->showformNew($typeProp);
        } else {
            $this->view->showerror("Los datos ingresados son incorrectos");
        }
    }

      
    function formEditProp(){
        $this->checklogueado();
        $oneProp= $this->model->getProp($_POST['ID']);
        $typeProp = $this->typeModel->GetAllTypesProp();
        $this->view->ShowOneEdit($oneProp,$typeProp);
      
    }

    
    function EditProp(){
        $this->checklogueado();
        $id = ($_POST['input_id']);
        if ((isset($_POST['input_name'])) && (isset($_POST['input_value'])) && ($_POST['input_name']!= "")  && ($_POST['input_value'] !="" )) {
            $this->model->updateProp($_POST['input_id'],$_POST['input_type'],$_POST['input_name'],$_POST['input_adress'],$_POST['input_value'],$_POST['input_description'],$_POST['input_date']);
            $this->view->ShowListLocation();
        }
        else {
        $this->view->showError("Los datos ingresados son incorrectos");

        }
    }
 

    function viewOne($params = null){
        $prop_id = $params[':ID'];
        $oneProp= $this->model->getProp($prop_id);
        $id=$oneProp[0]->tipo;
        $typeProp = $this->typeModel->GetType($id);
         $type=$typeProp[0]->nombre; 
       $this->view->ShowOne($oneProp,$type); 
    }

   

    function  showByType(){
        $id = ($_POST['input_type']);
        $prop = $this->model->GetByType($id);
        $typeProp = $this->typeModel->GetAll();
        $this->view->ShowAll($prop,$typeProp,$this->admin); 
    }
  
    function delProp($params = null){s
        $this->checklogueado();
        $prop_id = $params[':ID'];
        $this->model->deleteProp($prop_id);
        $this->view->ShowListLocation();
    }

    function GetComentarios(){
        $this->view->ShowComentarios();
    } */
}

