<?php
require_once 'RouterClass.php';
require_once 'api/ApiController.php';
/* 
echo "ESTA ANDANDO EL API ROUTER!!!!!!!!!!!";    */

// INSTANCIAMOS EL ROUTER.

$router = new  Router();

// TABLA NUEVA DE ROUTEO. 
    
// "ruta", "RECURSO", "METODO O ACCION", "CONTROLADOR" , "METODO / FUNCION";
// EJEMPLO DE RUTA -----> $router->addRoute("tasks / GET / ApiController / getTasks");

$router->addRoute("comentarios/:ID" , "GET" , "ApiController" , "ShowAllComments"); // ANDANDO

$router->addRoute("traerporid/:ID" , "GET" , "ApiController" , "MostrarPorId"); // SIN USO POR AHORA

$router->addRoute("borrar/:ID" , "DELETE" , "ApiController" , "DelComment"); // ANDANDO

$router->addRoute("agregarcomentario" , "POST" , "ApiController" , "AddComment"); // ANDANDO


//run
$router->route($_GET['recurso'], $_SERVER['REQUEST_METHOD']); 

// EN API REST LAS CLASES DE PHP NO SE CIERRAN NIGUNA!!! 