<?php

//require_once("Profile.php");

class User{

    protected $username = "";
    protected $profile;
    
        public function __construct()
        {
            
        }
    
        public function getUsername()
        {
            return $this->username;
        }
    
        public function setUsername($username)
        {
            $this->username = $username;
        }
        
        public function getProfile()
        {
            return $this->profile;
        }
        
        public function setProfile($profile)
        {
            $this->profile = $profile;
        }

    
}
