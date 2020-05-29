<?php

require_once 'models/Courses.php';
  require_once 'models/Modelo.php'; 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoursesController
 *
 * @author n_caffa
 */


class CoursesController {
    
    public function listarCursos() {
        
        
        $courses = new Courses();
         $model = new Modelo();
         
        $courses = $model->listarCourses();
        
        
        require_once 'views/courses/listar.php';
        
    }
    
}
