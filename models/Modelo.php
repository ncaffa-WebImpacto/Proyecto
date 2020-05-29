<?php


    require_once 'config/Database.php';
    require_once 'models/Comments.php';
    require_once 'models/Courses.php';
    require_once 'models/Users.php';
    require_once 'models/Users_courses.php';
    require_once 'models/Videos.php';
    
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Modelo
 *
 * @author n_caffa
 */
class Modelo {
    
    
    public $db;
    
    
    function __construct() {
        $this->db = Database::conection();
    }
    
    public function allUsers(){
        $query = $this->db->query("SELECT * FROM USERS");
        
        return $query;
    }
    
    
     public function listarCourses() {
        
        $query = $this->db->query("SELECT * FROM COURSES");
        
        return $query;
        
    }
    
   

    
}
