<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of videos
 *
 * @author n_caffa
 */
class Videos {
    private $id;
    private $name;
    private $description;
    private $url;
    private $course_id;
    
    function __construct($id, $name, $description, $url, $course_id) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->url = $url;
        $this->course_id = $course_id;
    }
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getUrl() {
        return $this->url;
    }

    function getCourse_id() {
        return $this->course_id;
    }
    
    function setId($id): void {
        $this->id = $id;
    }

    function setName($name): void {
        $this->name = $name;
    }

    function setDescription($description): void {
        $this->description = $description;
    }

    function setUrl($url): void {
        $this->url = $url;
    }

    function setCourse_id($course_id): void {
        $this->course_id = $course_id;
    }





    
}
