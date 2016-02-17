<?php

require_once("HTTPData.php");

class HTTPPostData extends HTTPData {

    public function __construct()
    {
        //runs the HTTPostData constructor
    }
    
    public function getKey($key)
    {
        //returns the $key value in the $_POST array
         $this->key = $key;
        
        return $_POST[$this->key];
    }
    
}