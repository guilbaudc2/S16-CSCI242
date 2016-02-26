<?php

require_once("Programmer.php");

class CoolProgrammer extends Programmer{
    
    
    public function __construct()
    {
        //constructor stuff.
        
        
        //ans: parent::__construct();
    }
    
    
    public function getGreeting()
	{
	    //returns a different value for the same function in Programmer.php
		return "Hey dude!";
	}

    
}