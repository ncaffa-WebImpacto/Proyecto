<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author n_caffa
 */
class Users {
   private $id;
   private $email;
   private $name;
   private $surname;
   private $teacher;
   private $password;
   public $db;
   
   function __construct() {
    $this->db = Database::conection();
   }

   
   function getId() {
       return $this->id;
   }

   function getEmail() {
       return $this->email;
   }

   function getName() {
       return $this->name;
   }

   function getSurname() {
       return $this->surname;
   }

   function getTeacher() {
       return $this->teacher;
   }

   function getPassword() {
       return $this->password;
   }
   
   function setId($id): void {
       $this->id = $id;
   }

   function setEmail($email): void {
       $this->email = $email;
   }

   function setName($name): void {
       $this->name = $name;
   }

   function setSurname($surname): void {
       $this->surname = $surname;
   }

   function setTeacher($teacher): void {
       $this->teacher = $teacher;
   }

   function setPassword($password): void {
       $this->password = $password;
   }
   
   
    public function login() {
        $result = false;
        
        $email = $this->email;
        $password = $this->password;
       
            
        $sql = "SELECT * FROM USERS WHERE email = '$email'";
        $login= $this->db->query($sql);
         
        if($login && $login->num_rows == 1){
            $user = $login->fetch_object();
            
            
            //$verify = password_verify(trim($password), trim($user->password));
            
     
            if(trim($password)== trim($user->password)){
                
                $result = $user;
               
                
            }
            
        }
       
        return $result;
    }


   
   


}


