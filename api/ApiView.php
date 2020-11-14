<?php 
 // UNICA VISTA QUE RESPONDE EN FORMATO JSON

class ApiView {

public function response($data){  
echo json_encode($data); // manden lo que manden sabe devolver en formato de JSON
}






    
}

// EN API REST LAS CLASES DE PHP NO SE CIERRAN NIGUNA!!! 