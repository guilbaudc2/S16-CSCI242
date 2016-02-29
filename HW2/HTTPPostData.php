<?php

require_once("HTTPData.php");

class HTTPPostData extends HTTPData {

    public function __construct()
    {
        //runs the HTTPostData constructor
    }
    
    public function getKey($key)
    {
        //returns the $key value in the $_POST array if it is in the array
       
        if(isset($_POST[$key]))
        {
        return $_POST[$key];
        }
    }
    
}