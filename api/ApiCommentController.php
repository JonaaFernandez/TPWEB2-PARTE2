<?php 
require_once "./Model/PropertiesModel.php";
require_once "./api/ApiView.php";
require_once "./Model/CommentModel.php";
require_once "./api/ApiController.php";


class ApiCommentController extends ApiController{

    function __construct(){
        parent:: __construct(); 
        $this->model = new CommentModel();   
        $this->view = new ApiView(); 
    }


    public function ShowAllByProp($params = null){
        $propiedad = $params[':ID'];
        $comentarios = $this->model->GetCommentByProp($propiedad);
        $this->view->response($comentarios,200);  // devuelve en formato de json
        }


    public function DelComment($params = null){
        $comentario_id = $params[':ID'];
        $comment= $this->model->GetComm($comentario_id);
        
        if ($comment){
            $this->model->DelComment($comentario_id);
            $this->view->response('El comentario ' .  $comentario_id . ' ha sido borrado',200);
        }
        else {
            $this->view->response('El comentario con id ' . $comentario_id . ' no existe',404);
        }
    }

    public function AddComment($params = null){
        $body= $this->getData(); 
        $newId = $this->model->InsertarComentario($body->comentario,$body->puntaje,$body->propiedad);
        if ($newId != 0){
            $this->view->response('El comentario ha sido guardado exitosamente con el id ' .   $newId,201);
        }
        else {
            $this->view->response('El comentario no ha podido guardarse',404);
        }
    }
} 
    
    













// EN API REST LAS CLASES DE PHP NO SE CIERRAN NIGUNA!!! 
    
    
    
    











