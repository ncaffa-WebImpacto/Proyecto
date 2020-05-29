<?php


function autoLoad($classname){
    
    include 'controllers/'.$classname.'.php';
    
}


spl_autoload_register('autoLoad');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

