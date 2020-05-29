<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users_courses
 *
 * @author n_caffa
 */
class Users_courses {
    private $user_id;
    private $course_id;
    
    
    function __construct($user_id, $course_id) {
        $this->user_id = $user_id;
        $this->course_id = $course_id;
    }
    
    
    function getUser_id() {
        return $this->user_id;
    }

    function getCourse_id() {
        return $this->course_id;
    }


    function setUser_id($user_id): void {
        $this->user_id = $user_id;
    }

    function setCourse_id($course_id): void {
        $this->course_id = $course_id;
    }



}
