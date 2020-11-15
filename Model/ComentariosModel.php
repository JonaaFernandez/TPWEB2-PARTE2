<?php

class ComentariosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_propiedades;charset=utf8', 'root', '');
    }
         
  
   

    function GetComentarioPorPropiedad($prop){
        $sentencia = $this->db->prepare("SELECT * FROM comentarios WHERE propiedad =? order by id");
        $sentencia->execute([$prop]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    
    function InsertarComentario($comentario,$puntaje,$propiedad){ // tambien va $usuario?
        $sentencia = $this->db->prepare("INSERT INTO propiedades(comentario, puntaje, propiedad) VALUES(?,?,?)");
        $sentencia->execute([$comentario,$puntaje,$propiedad]);
        return;

    }
     
     /*  function getProp($id){
        $sentencia = $this->db->prepare("SELECT * FROM propiedades WHERE id=?");
        $sentencia->execute([$id]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);

    } */
     
    function BorrarComentario($comentarioId){
        $sentencia = $this->db->prepare("DELETE FROM comentarios WHERE id=?");
        $sentencia->execute(array($comentarioId));
        return;
    }
      
}

