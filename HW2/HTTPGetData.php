<?php

require_once("HTTPData.php");

class HTTPGetData extends HTTPData {
    
    public function __construct()
    {
        //runs the HTTPGetData constructor
    }
    
    public function getKey($key)
    {
        //returns the $key value in the $_GET array
        
        $this->key = $key;
        
        return $_GET[$this->key];
    }
}