<?php

require_once 'config/Database.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of courses
 *
 * @author n_caffa
 */
class Courses {

    private $id;
    private $name;
    private $description;
    private $url;
    public $db;

    function __construct() {

        $this->db = Database::conection();
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

    function getDb() {
        return $this->db;
    }
    function setUrl($url): void {
        $this->url = $url;
    }

    function setDb($db): void {
        $this->db = $db;
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

  

}
