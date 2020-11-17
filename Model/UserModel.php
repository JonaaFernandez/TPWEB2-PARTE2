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
      function InsertUser($newUser,$newEmail,$newPassw){
        $sentencia = $this->db->prepare("INSERT INTO usuarios(user, email, password, admin) VALUES(?,?,?,?)");
        $sentencia->execute([$newUser, $newEmail,$newPassw,False]);
    return;


      }
}

?>

