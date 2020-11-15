warning: LF will be replaced by CRLF in RouteAvanzado.php.
The file will have its original line endings in your working directory
warning: LF will be replaced by CRLF in View/PropertiesView.php.
The file will have its original line endings in your working directory
[1mdiff --git a/Controller/PropertiesController.php b/Controller/PropertiesController.php[m
[1mindex cea1dca..f48c0d6 100644[m
[1m--- a/Controller/PropertiesController.php[m
[1m+++ b/Controller/PropertiesController.php[m
[36m@@ -139,7 +139,9 @@[m [mclass PropertiesController{[m
         $this->view->ShowListLocation();[m
     }[m
 [m
[31m-[m
[32m+[m[32m    function GetComentarios(){[m
[32m+[m[32m        $this->view->ShowComentarios();[m
[32m+[m[32m    }[m
 }[m
 [m
 ?>[m
\ No newline at end of file[m
[1mdiff --git a/RouteAvanzado.php b/RouteAvanzado.php[m
[1mindex f37a853..282b9c1 100644[m
[1m--- a/RouteAvanzado.php[m
[1m+++ b/RouteAvanzado.php[m
[36m@@ -45,6 +45,9 @@[m
 // elimina un elemento de la tabla [m
     $r->addRoute("eliminar/:ID", "GET", "PropertiesController", "delProp");[m
     $r->addRoute("mostrarPorTipo", "POST", "PropertiesController", "showByType");[m
[32m+[m
[32m+[m[32m//Comentarios[m
[32m+[m[32m$r->addRoute("comentarios", "GET", "PropertiesController", "GetComentarios");[m
  [m
 [m
 //---------------------------------------- BBDD - user -----------------------------------------[m
[1mdiff --git a/View/PropertiesView.php b/View/PropertiesView.php[m
[1mindex affa32f..f86a8b2 100644[m
[1m--- a/View/PropertiesView.php[m
[1m+++ b/View/PropertiesView.php[m
[36m@@ -103,20 +103,21 @@[m [mfunction showAll($prop,$typeProp){   //VENTAS[m
     [m
     }[m
 [m
[31m-[m
[31m-[m
[31m-[m
[31m-[m
[31m-[m
[31m-      [m
     function showOne($prop,$typeProp){[m
[31m-      [m
         $smarty = new Smarty();  [m
         $smarty->assign('title', 'Datos de la propiedad'); [m
         $smarty->assign('propiedad', $prop); [m
         $smarty->assign('tipo', $typeProp); [m
         $smarty->display('templates/showOne.tpl'); [m
     }[m
[32m+[m
[32m+[m[32m    function ShowComentarios(){[m
[32m+[m[32m        $smarty = new Smarty();[m[41m  [m
[32m+[m[32m        $smarty->display('templates/comentarios.tpl');[m[41m [m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m    }[m
 }[m
 [m
 [m
