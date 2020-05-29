<?php

    require_once 'config/constantes/DBconfig.php';
   
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        
/**
 * Description of Database
 *
 * @author n_caffa
 */
class Database {
//     public static function initDB(): \PDO
  //  {
    //    $pdo = new PDO('mysql:host=' . DBConfig::HOST . ';dbname=' . DBConfig::DB_NAME . ';charset=utf8', DBConfig::USER, DBConfig::PASS);
      //  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //return $pdo;
    //}
    
    
    public static function conection() {
        $conn = new mysqli(DBConfig::HOST,DBConfig::USER,DBConfig::PASS,DBConfig::DB_NAME);
        $conn->query("SET NAMES 'utf8'");
        
        
        return $conn;
        
    }
    
}
