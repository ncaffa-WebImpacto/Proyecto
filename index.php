<?php

        require_once 'autoLoad.php';
        require_once 'config/constantes/parameters.php';

    //require_once 'controllers/UsersController.php';
    //require_once 'controllers/CoursesController.php';
    
    if(isset($_GET['controller']) && class_exists($_GET['controller'])){
        
       // var_dump($_GET['controller']);
        
        $controller = new $_GET['controller']();
        
           
            
            if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){
                    
              
                
                 $action = $_GET['action'];
                 $controller->$action();
    
                }else{
                     $error = new ErrorController();
                     $error->index();
                }

     }  else {
             $error = new ErrorController();
             $error->index();
    }
    
    
   // $controllerUser->mostrarTodos();
   // $controllerUser->crear();

