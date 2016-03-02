<?php

require_once("Profile.php");

class User{

    protected $username = "";
    protected $profile;
    
        public function __construct()
        {
            //creates and runs the constructor
            
            $this->profile = new Profile();
        }
    
        public function getUsername()
        {
            //returns the User's username when this function is accessed.
            return $this->username;
        }
    
        public function setUsername($username)
        {
            //saves the arguments to the protected global variable $this->username
            $this->username = $username;
        }
        
        public function getProfile()
        {
            //returns the User's profile when this function is accessed.
            return $this->profile;
        }
        
        public function setProfile($profile)
        {
            //saves the arguments to the protected global variable $this->profile
            $this->profile = $profile;
        }

    
}
