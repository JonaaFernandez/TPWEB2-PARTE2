<?php
require_once 'RouterClass.php';
require_once 'api/ApiCommentController.php';


// INSTANCIAMOS EL ROUTER.

$router = new  Router();

// TABLA NUEVA DE ROUTEO. 
    
// "ruta", "RECURSO", "METODO O ACCION", "CONTROLADOR" , "METODO / FUNCION";
// EJEMPLO DE RUTA -----> $router->addRoute("tasks / GET / ApiController / getTasks");

$router->addRoute("comentarios/:ID" , "GET" , "ApiCommentController" , "ShowAllByProp"); // ANDANDO

$router->addRoute("traerporid/:ID" , "GET" , "ApiCommentController" , "MostrarPorId"); // SIN USO 

$router->addRoute("borrar/:ID" , "DELETE" , "ApiCommentController" , "DelComment"); // ANDANDO

$router->addRoute("agregarcomentario" , "POST" , "ApiCommentController" , "AddComment"); // ANDANDO


//run
$router->route($_GET['recurso'], $_SERVER['REQUEST_METHOD']); 

// EN API REST LAS CLASES DE PHP NO SE CIERRAN NIGUNA!!! 