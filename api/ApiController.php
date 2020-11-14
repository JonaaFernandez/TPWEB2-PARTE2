<?php
require_once "./Model/PropertiesModel.php";
require_once "./Model/PropertiesTypesModel.php";
require_once "./api/ApiView.php";



class ApiController {

    private $model;
    private $view;


    function __construct(){
        $this->model = new PropertiesModel();   //  Cual model usamos aca? 
        $this->view = new ApiView(); 
        $this->Typesmodel = new PropertiesTypesModel();
    }


    public function MostrarTodasLasProp($params = null){
        $tareas = $this->model->GetAllProp();
        echo "<br>";
        echo "<br>";
        echo "! !  ! DEVOLVIENDO EN FORMATO JSON ! ! ! " ; 
        echo "<br>";
        echo "<br>";
        $this->view->response($tareas);
      
        var_dump($tareas);   // hay que devolverlo en formato de JSON */
    }
    
    public function MostrarPorId($id){
        $this->model->getProp($id);
        $this->view->response($id);
    }













}

// EN API REST LAS CLASES DE PHP NO SE CIERRAN NIGUNA!!! 