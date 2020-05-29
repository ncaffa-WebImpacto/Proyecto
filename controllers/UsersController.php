<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        require_once 'models/Users.php';  
        require_once 'models/Modelo.php'; 

/**
 * Description of UsersController
 *
 * @author n_caffa
 */

class UsersController {
    
    
    public function mostrarTodos() {
        
        
        $users = new Users();
        $model = new Modelo();
        
        $users = $model->allUsers();
        
         require_once 'views/users/mostrar-todos.php';
        
        
    }
    
    
    public function crear() {
            
        require_once 'views/users/crear.php';
    }
    
    
    public function login() {
        
        if(isset($_POST)){
            
            $user = new Users();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            
            
            
            $identity = $user->login();
            var_dump($identity);
            
            if($identity && is_object($identity)){
                
                $_SESSION['identity']= $identity;
                
                if($identity->teacher == 1){
                    $_SESSION['admin']= true;
                    header("Location:".base_url.'views/admin.php');
                }
                if($identity->teacher == 0){
                    $_SESSION['admin']= true;
                    header("Location:".base_url.'views/user.php');
                }
                
            } else {
                $_SESSION['error_login'] = "Identificacion fallida!!";
            }

            
        }else{
            header("Location:".base_url.'views/login/login.php');
            echo "USUARIO NO EXISTE";
        }
        
        
    }
   
}
