<?php

class UserModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_propiedades;charset=utf8', 'root', '');
    }
     
    function GetUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM usuarios WHERE user=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function GetAll(){

        $sentencia = $this->db->prepare("SELECT * FROM usuarios");
        $sentencia->execute(array());
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }


      function InsertUser($newUser,$newEmail,$newPassw){
        $sentencia = $this->db->prepare("INSERT INTO usuarios(user, email, password, admin) VALUES(?,?,?,?)");
        $sentencia->execute([$newUser, $newEmail,$newPassw,False]);
    return;
 }
    function DelUser($user_id){
      $sentencia = $this->db->prepare("DELETE FROM usuarios WHERE id=?");
      return $sentencia->execute(array($user_id));
  }

  function GetOneUser($user){
    $sentencia = $this->db->prepare("SELECT * FROM usuarios WHERE id=?");
    $sentencia->execute(array($user));
    return $sentencia->fetch(PDO::FETCH_OBJ);
}

function ModifUser($id, $user, $email, $admin){
    $sentencia = $this->db->prepare("UPDATE usuarios SET user=?, email=? , admin=? WHERE id=?");
    $sentencia->execute([$user,$email,$admin,$id]);
    return;
}

function DeleteOneUser($id){
    $sentencia = $this->db->prepare("DELETE FROM usuarios WHERE id=?");
    $sentencia->execute(array($id));


}

}


?>

