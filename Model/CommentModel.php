<?php

class CommentModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_propiedades;charset=utf8', 'root', '');
    }
         
  
   

    function GetCommentByProp($prop){
       /*  $sentencia = $this->db->prepare("SELECT * FROM comentarios WHERE propiedad=? order by id"); */
       
       $sentencia = $this->db->prepare("SELECT * FROM comentarios WHERE propiedad=? order by id");
       $sentencia->execute([$prop]);
       /*  echo 'llegue al model .............'; */
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    
    function InsertarComentario($comentario,$puntaje,$propiedad){ // tambien va $usuario?
        $sentencia = $this->db->prepare("INSERT INTO comentarios(comentario, puntaje, propiedad) VALUES(?,?,?)");
        $sentencia->execute([$comentario,$puntaje,$propiedad]);
       return $this->db->lastInsertId();
    }
    
      function GetComm($id){
        $sentencia = $this->db->prepare("SELECT * FROM comentarios WHERE id=?");
        $sentencia->execute([$id]);
        return $sentencia->fetch(PDO::FETCH_OBJ);

    } 
     
    function DelComment($comentarioId){
        $sentencia = $this->db->prepare("DELETE FROM comentarios WHERE id=?");
        return $sentencia->execute(array($comentarioId));
    }
      
}

