<?php
require_once 'RouterClass.php';
require_once 'api/ApiController.php';

echo "ESTA ANDANDO EL API ROUTER!!!!!!!!!!!";   

// INSTANCIAMOS EL ROUTER.

$router = new  Router();

// TABLA NUEVA DE ROUTEO. 
    
// "ruta", "RECURSO", "METODO O ACCION", "CONTROLADOR" , "METODO / FUNCION";
// EJEMPLO DE RUTA -----> $router->addRoute("tasks / GET / ApiController / getTasks");

$router->addRoute("tareas" , "GET" , "ApiController" , "MostrarTodasLasProp"); // ANDANDO





//run
$router->route($_GET['recurso'], $_SERVER['REQUEST_METHOD']); 

