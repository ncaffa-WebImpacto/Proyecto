<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comments
 *
 * @author n_caffa
 */
class Comments {
    
    private $id;
    private $title;
    private $content;
    private $video_id;
    private $users_id;
    
    function __construct($id, $title, $content, $video_id, $users_id) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->video_id = $video_id;
        $this->users_id = $users_id;
    }
    
    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getContent() {
        return $this->content;
    }

    function getVideo_id() {
        return $this->video_id;
    }

    function getUsers_id() {
        return $this->users_id;
    }


    function setId($id): void {
        $this->id = $id;
    }

    function setTitle($title): void {
        $this->title = $title;
    }

    function setContent($content): void {
        $this->content = $content;
    }

    function setVideo_id($video_id): void {
        $this->video_id = $video_id;
    }

    function setUsers_id($users_id): void {
        $this->users_id = $users_id;
    }


    
    

    
}
