<?php

class PropertiesModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_propiedades;charset=utf8', 'root', '');
    }
         
     function GetAllProp(){
          $sentencia = $this->db->prepare("SELECT * FROM propiedades order by tipo");
          $sentencia->execute();
          return $sentencia->fetchAll(PDO::FETCH_OBJ);

      }
   
    
      function searchProp($search){
        $sentencia = $this->db->prepare("SELECT * FROM propiedades WHERE (id LIKE '%$search%') 
        OR (tipo LIKE '%$search%') OR (nombre LIKE '%$search%') OR (descripcion LIKE '%$search%')
        OR (direccion LIKE'%$search%') OR (fecha LIKE'%$search%') OR (valor LIKE'%$search%')");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function pageSearch($search,$nroPag,$PropPorPagina){
      $sentencia = $this->db->prepare("SELECT * FROM propiedades WHERE (id LIKE '%$search%') 
      OR (tipo LIKE '%$search%') OR (nombre LIKE '%$search%') OR (descripcion LIKE '%$search%')
      OR (direccion LIKE'%$search%') OR (fecha LIKE'%$search%') OR (valor LIKE'%$search%') LIMIT $nroPag , $PropPorPagina");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

    function GetPagesByType($type,$nroPag,$PropPorPagina){
        $sentencia = $this->db->prepare("SELECT * FROM propiedades WHERE tipo=? LIMIT $nroPag , $PropPorPagina");
        $sentencia->execute([$type]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
   /*  function GetPagesbyType2($type){
      $sentencia = $this->db->prepare("SELECT * FROM propiedades WHERE tipo=?");
      $sentencia->execute([$type]);
      return $sentencia->fetchAll(PDO::FETCH_OBJ);
    } */
    
      function InsertProp($type,$name,$adress,$value,$description,$date,$imagen){
      
          $sentencia = $this->db->prepare("INSERT INTO propiedades(tipo, nombre, direccion, descripcion, valor, fecha,imagen) VALUES(?,?,?,?,?,?,?)");
          $sentencia->execute([$type,$name,$adress,$value,$description,$date,$imagen]);
      return;

      }
     
      function getProp($id){
        $sentencia = $this->db->prepare("SELECT * FROM propiedades WHERE id=?");
        $sentencia->execute([$id]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
        
    }
     
      function DeleteProp($prop_id){
          $sentencia = $this->db->prepare("DELETE FROM propiedades WHERE id=?");
          $sentencia->execute(array($prop_id));
      }



    
    function updateProp($id,$type,$name,$adress,$value,$description,$date,$imagen){
          $sentencia = $this->db->prepare("UPDATE propiedades SET tipo=?, nombre=?, direccion=?,  valor=?, descripcion=?, fecha=?, imagen=?  WHERE id=?");
          $sentencia->execute([$type,$name,$adress,$value,$description,$date,$imagen,$id]);
      return;
    }
     
    function GetPages($nroPag,$PropPorPagina){
      $sentencia = $this->db->prepare("SELECT * FROM propiedades LIMIT $nroPag , $PropPorPagina");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
      function ContarItems(){
        $sentencia = $this->db->prepare("SELECT * FROM propiedades order by tipo");
        $sentencia->execute();
        return $sentencia->rowCount();
      }
     
      function ContarItemsSearch($search){
        $sentencia = $this->db->prepare("SELECT * FROM propiedades WHERE (id LIKE '%$search%') 
        OR (tipo LIKE '%$search%') OR (nombre LIKE '%$search%') OR (descripcion LIKE '%$search%')
        OR (direccion LIKE'%$search%') OR (fecha LIKE'%$search%') OR (valor LIKE'%$search%')");
        $sentencia->execute();
        return $sentencia->rowCount();
      }


      function ContarItemsId($id){
        $sentencia = $this->db->prepare("SELECT * FROM propiedades WHERE tipo=?");
        $sentencia->execute([$id]);
        return $sentencia->rowCount();
      }



}

?>