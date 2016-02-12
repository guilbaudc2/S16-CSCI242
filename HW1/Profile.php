<?php
require_once("User.php");

class Profile extends User{
    
public $firstName;
public $lastName;
public $emailAddress;

    public function __construct()
    {
 
    }

    public function getFirstName()
    {
        return $this->firstName;

    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    
    public function getLastName()
    {
        return $this->lastName;

    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }   
    
    public function getEmailAddress()
    {
        return $this->emailAddress;

    }

    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }    
}
