<?php

class Profile {
    
public $firstName;
public $lastName;
public $emailAddress;

    public function __construct()
    {
        //creates and runs the constructor
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
