<?php
require_once "UserController.php";
require_once "./View/PropertiesView.php";
require_once "./Model/PropertiesModel.php";
require_once "./Model/propertiesTypesModel.php"; 

// esto es una prueba para el git
// esto es otra prueba mas!!
class PropertiesController{

    private $cont;
    private $view;
    private $model;
    private $admin = 0;
    
    /* private $typeModel; */
   

    function __construct(){
        $this->view = new PropertiesView();
        $this->model = new PropertiesModel();
        $this->typeModel = new propertiesTypesModel;
        $this->cont = new UserController();
    }

 

    function Home(){
     $log = $this->cont->checklogueado();
     $this->view->ShowHome($log);
    }

    function Alquileres(){
    $log = $this->cont->checklogueado();
    $this->view->ShowAlquileres($log);
    }

     
    function Contacto(){
    $log = $this->cont->checklogueado();
     $this->view->ShowContacto($log);
    }

   /*  function showAllProp(){   Muestra "ventas, dependiendo si estoy como admin o usuario" 
     $prop = $this->model->GetAllProp();
     $typeProp = $this->typeModel->GetAll();
     $log = $this->cont->checklogueado();
     $this->view->ShowAll($prop,$typeProp,$log);
    }  */
    
    function showAllProp($params = null){ 
        $nroPag = $params[':ID'];
        $PropPorPagina = 3; // cantidad de propiedades por pagina.
        $filaInicial= (($nroPag-1) * $PropPorPagina);
        $prop = $this->model->GetPages($filaInicial,$PropPorPagina);
        $nroItems = $this->model->ContarItems();
        $typeProp = $this->typeModel->GetAll();
        $log = $this->cont->checklogueado();
        $this->view->ShowAll($prop,$typeProp,$log,$nroPag,$nroItems,$PropPorPagina);
       } 


    
    function cargaProp($params = null){
    $log = $this->cont->checklogueado();
    if (!$log) { 
      /*   $this->cont->Login(); */
      header("Location: " . LOGIN);
      die();
    }
    else {
        $prop_id = $params[':ID'];
        $prop = $this->model->GetProp($prop_id);
        $typeProp = $this->typeModel->GetAll();
        $this->view->ShowOneEdit($prop,$typeProp,$log);
    }   
    }

   


    function formNew(){
        $log = $this->cont->checklogueado();
        $typeProp = $this->typeModel->GetAll();
        $this->view->showFormNew($typeProp,$log);
    }

 
  
    function InsertProp(){
        $log = $this->cont->checklogueado();
        if (!$log){
            header("Location: " . LOGIN);
            die();
        }
        else{
            if (isset($_FILES['img'])){
                $uploads=getcwd() . '/uploads';  /// carpeta donde guardo las imagenes */
                $destino=tempnam($uploads,$_FILES['img']['name']) ;  
                move_uploaded_file($_FILES['img']['tmp_name'], $destino); 
                $destino=basename($destino);
               echo $destino;
            }
        if ((isset($_POST['input_name'])) && (isset($_POST['input_value'])) && ($_POST['input_name']!= "")  && ($_POST['input_value'] !="" )) {
             $typeProp = $this->typeModel->GetAll();
             $this->model->insertProp($_POST['input_type'],$_POST['input_name'],$_POST['input_adress'],$_POST['input_description'],$_POST['input_value'],$_POST['input_date'],$destino);
             $this->view->showformNew($typeProp,$log);
        } else {
            $this->view->showerror($log,"Los datos ingresados son incorrectos");
        }
    }
    }

      
    function formEditProp(){
        $log = $this->cont->checklogueado();
        $oneProp= $this->model->getProp($_POST['ID']);
        $typeProp = $this->typeModel->GetAllTypesProp();
        $this->view->ShowOneEdit($oneProp,$typeProp,$log);
      
    }

    
    function EditProp(){
        $log = $this->cont->checklogueado();
        if ($log==0){
          /*   $this->cont->Login(); */
          header("Location: " . LOGIN);
          die();
        }
        else{
          /*   $id = ($_POST['input_id']); */
            if ((isset($_POST['input_name'])) && (isset($_POST['input_value'])) && ($_POST['input_name']!= "")  && ($_POST['input_value'] !="" )) {
                $this->model->updateProp($_POST['input_id'],$_POST['input_type'],$_POST['input_name'],$_POST['input_adress'],$_POST['input_value'],$_POST['input_description'],$_POST['input_date']);
                $this->view->ShowListLocation();
            }
            else {
            $this->view->showError($log,"Los datos ingresados son incorrectos");
        }
        }
    }
 

    function viewOne($params = null){
        $prop_id = $params[':ID'];
        $oneProp= $this->model->getProp($prop_id);
        $id=$oneProp[0]->tipo;
        $typeProp = $this->typeModel->GetType($id);
        $type=$typeProp[0]->nombre; 
        $log = $this->cont->checklogueado();
       $this->view->ShowOne($oneProp,$type,$log); 
    }

   

  function  searchByType($params = null){
        $id = $params[':ID'];
        $nroPag = $params[':PAG'];
        $PropPorPagina = 3;  
        $filaInicial= (($nroPag-1) * $PropPorPagina);
        $nroItems = $this->model->ContarItemsId($id);
        $prop = $this->model->GetPagesbyType($id,$filaInicial,$PropPorPagina);
        $typeProp = $this->typeModel->GetAll();
        $log = $this->cont->checklogueado();
        $this->view->ShowTypesProp($prop,$typeProp,$log,$id,$nroPag,$nroItems,$PropPorPagina); 
    }
     function searchByTypeInic(){
        $id = ($_POST['input_type']);
        $nroPag = 1; 
        $PropPorPagina = 3;
        $prop = $this->model->GetPagesbyType($id,$nroPag,$PropPorPagina);
        $typeProp = $this->typeModel->GetAll();
        $log = $this->cont->checklogueado();
        $nroItems = $this->model->ContarItemsId($id);
        $this->view->ShowTypesProp($prop,$typeProp,$log,$id,$nroPag,$nroItems,$PropPorPagina); 
    } 

   /*  function  showByType2(){
        $id = ($_POST['input_type']);
        $prop = $this->model->GetByType($id);
        $typeProp = $this->typeModel->GetAll();
        $this->view->ShowAll($prop,$typeProp,$this->admin); 
    } */
  
  
    function delProp($params = null){
        $log = $this->cont->checklogueado();
        if (!$log){
            $this->cont->login();
        }else{
            $prop_id = $params[':ID'];
            $this->model->deleteProp($prop_id);
            $this->view->ShowListLocation();
        }
    }

    function GetComentarios($params = null){
        $log = $this->cont->checklogueado();
        $coment = $params[':ID']; 
        $data =  $this->model->getProp($coment);
        $this->view->ComentariosPropiedades($log,$data);
   }
/* no funciona */
   
function busquedaAvanzadaInic(){
        $log = $this->cont->checklogueado();
   
        if ((isset($_POST['input_search'])) && ($_POST['input_search']!= "")) {
            $patron =$_POST['input_search'];
            $PropPorPagina = 3; // cantidad de propiedad(($nroPag-1) * $PropPorPagina);es por pagina.
            $filaInicial= 0;
            $prop = $this->model->pageSearch($patron,$filaInicial,$PropPorPagina);
            $nroItems = $this->model->ContarItemsSearch($patron);
            $typeProp = $this->typeModel->GetAll();
            $this->view->ShowSearchAv($prop,$typeProp,$log,1,$nroItems,$PropPorPagina,$patron); 
        }
        else {
            $this->view->showError($log,"Los datos ingresados son incorrectos");
    }
  
}



function busquedaAvanzada($params=null){
    $log = $this->cont->checklogueado();   
    if($params){    
        $patron = $params[':PATRON'];
        $nroPag = $params[':PAG'];
       
        /*   if ((isset($_POST['input_search'])) && ($_POST['input_search']!= "")) {
            $patron = ($_POST['input_search']);
            $nroPag = $params[':ID']; */
            $PropPorPagina = 3; // cantidad de propiedades por pagina.
            $filaInicial= (($nroPag-1) * $PropPorPagina);
            $prop = $this->model->pageSearch($patron,$filaInicial,$PropPorPagina);
            $nroItems = $this->model->ContarItemsSearch($patron);
            $typeProp = $this->typeModel->GetAll();
            $this->view->ShowSearchAv($prop,$typeProp,$log,$nroPag,$nroItems,$PropPorPagina,$patron); 
        }
        else {
            $this->view->showError($log,"Los datos ingresados son incorrectos");
    }
}


   
}

?>