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


    public function MostrarTodosLosComentarios($params = null){
        $tareas = $this->model->GetAllProp();
        echo "<br>";
        echo "<br>";
        echo "! !  ! DEVOLVIENDO EN FORMATO JSON ! ! ! " ; 
        echo "<br>";
        echo "<br>";
        $this->view->response($tareas);  // devuelve en formato de json
      
        
    }
    
    public function MostrarPorId($params = null){    // intentando traer de a una propiedad en formato JSON,
        $id_comentario = $params[':ID'];
        $dato = $this->model->getProp($id_comentario);
        if (!empty($dato)){
            $this->view->response($dato);
        }
    }       













}

// EN API REST LAS CLASES DE PHP NO SE CIERRAN NIGUNA!!! 