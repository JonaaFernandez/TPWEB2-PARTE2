<?php
    require_once 'Controller/PropertiesController.php';
  
    require_once 'RouterClass.php';
    require_once 'Controller/UserController.php';
    require_once 'Controller/PropertiesTypesController.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

 
 
 $r = new Router();

    
// "ruta", "VERBO", "Controlador", "metodo"

// ---------------------------------- BBDD - propiedades --------------------------------------
// llamamos al home
    $r->addRoute("home", "GET", "PropertiesController", "Home");
//llamamos a la pagina de alquileres
    $r->addRoute("alquileres", "GET", "PropertiesController", "alquileres");
//llamamos a la pagina de contacto   
    $r->addRoute("contacto", "GET", "PropertiesController", "contacto");

    // Formulario para dar de alta una propiedad
    $r->addRoute("alta", "GET", "PropertiesController", "formNew");

    // >recibe datos del Form  para dar de alta una propiedad
    $r->addRoute("insert", "POST", "PropertiesController", "insertProp");
  
// Mostrar todos
    $r->addRoute("ventas", "GET", "PropertiesController", "showAllProp");
 // Acá podría tener un formulario de inserción

  // Mostrar uno
    $r->addRoute("ver/:ID", "GET", "PropertiesController","viewOne");
  
// llama al form para modificar
    $r->addRoute("modificar/:ID", "GET", "PropertiesController", "cargaProp");
// lee los datos del form  y modifica los datos   
    $r->addRoute("editar", "POST", "PropertiesController", "editProp");
// elimina un elemento de la tabla 
    $r->addRoute("eliminar/:ID", "GET", "PropertiesController", "delProp");
    $r->addRoute("mostrarPorTipo", "POST", "PropertiesController", "showByType");
    $r->addRoute("busquedaAvanzada", "POST", "PropertiesController", "busquedaAvanzada");

//Comentarios
     $r->addRoute("coments/:ID", "GET", "PropertiesController", "GetComentarios");
  

//---------------------------------------- BBDD - user -----------------------------------------

    $r->addRoute("login", "GET", "UserController", "Login");
    $r->addRoute("verificarUsuario", "POST", "UserController", "VerifyUser");
    $r->addRoute("logout", "GET", "UserController", "LogOut");
    $r->addRoute("registro", "POST", "UserController", "SignUp");
    $r->addRoute("registrarse", "GET", "UserController", "newUser");

    $r->addRoute("usuarios", "GET", "UserController", "ShowAllUsers");
    $r->addRoute("verUsr/:ID", "GET", "UserController", "ViewOneUser");

    $r->addRoute("modificarUsr/:ID", "GET", "UserController", "modificarUsr");
    $r->addRoute("ConfirmarModUsr","POST", "UserController", "SaveUser");

    $r->addRoute("eliminarUsr/:ID", "GET", "UserController", "DeleteUser");


 
// ---------------------------------- BBDD - tipos_propiedades ---------------------------------
 
// Mostrar todos
$r->addRoute("verTodosLosTipos","GET", "PropertiesTypesController", "showAll");

$r->addRoute("verTipo/:ID","GET", "PropertiesTypesController", "showType");
 
$r->addRoute("modificarTipo/:ID","GET", "PropertiesTypesController", "showForEdit");

$r->addRoute("guardarMod","POST", "PropertiesTypesController", "edit");

$r->addRoute("insertTipo","POST", "PropertiesTypesController", "insert");

$r->addRoute("eliminarTipo/:ID","GET", "PropertiesTypesController", "delete");


    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
    
?>