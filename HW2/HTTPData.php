<?php

abstract class HTTPData {
    
   // protected $key;
    
    
    public function __construct()
    {
        //constructor
    }
    
    public abstract function getKey($key);
    
    //creates the abstract function getKey
}