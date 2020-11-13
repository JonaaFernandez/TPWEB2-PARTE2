<?php
require_once "./Model/PropertiesModel.php";
require_once "./Model/PropertiesTypesModel.php";


class ApiController {

    private $model;

    function __construct(){
        $this->model = new PropertiesModel ;   //  Cual model usamos aca? 
    }


    public function MostrarTodasLasProp($params = null){
        $tareas = $this->model->GetAllProp();
        echo "<br>";
        echo "<br>";
        var_dump($tareas);   // hay que devolverlo en formato de JSON
    }













}