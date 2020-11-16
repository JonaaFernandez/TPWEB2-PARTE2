<?php
require_once "./Model/PropertiesModel.php";
require_once "./Model/PropertiesTypesModel.php";
require_once "./api/ApiView.php";
require_once "./Model/ComentariosModel.php";



class ApiController {

    private $model;
    private $view;


    function __construct(){
        $this->model = new ComentariosModel();   //  Cual model usamos aca? 
        $this->view = new ApiView(); 
        $this->Typesmodel = new PropertiesTypesModel();
    }


    public function MostrarTodosLosComentarios($params = null){
        $comentarios = $this->model->GetComentarioPorPropiedad(50);
        echo "<br>";
        echo "<br>";
        echo "! !  ! DEVOLVIENDO EN FORMATO JSON ! ! ! " ; 
        echo "<br>";
        echo "<br>";
        $this->view->response($comentarios);  // devuelve en formato de json
        }
   /*  
    public function MostrarPorId($params = null){    // intentando traer de a una propiedad en formato JSON,
        $id_comentario = $params[':ID'];
        $dato = $this->model->getProp($id_comentario);
        if (!empty($dato)){
            $this->view->response($dato);
        }
    }        */

    public function DelComment($params = null){
        $comentario_id = $params[':ID'];
        $comment= $this->model->GetComm($comentario_id );
        if ($comment){
            $this->model->DelComment($comentario_id);
            $this->view->response('El comentario ha sido borrado',200);
        }
        else {
            $this->view->response('El comentario con id ' . $comentario_id . ' no existe',404);
        }
    }
    











}

// EN API REST LAS CLASES DE PHP NO SE CIERRAN NIGUNA!!! 