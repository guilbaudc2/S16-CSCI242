<?php

namespace Guilbaud;

use Guilbaud\NotCustomersAccountException;
use Guilbaud\BankAccount;

use \Exception;

class Customer {
    
    protected $accounts = array();
    
    public function __construct()
    {
        //creates and runs le constructor
    }
    
    public function addAccount(BankAccount $account)
    {
        $this->accounts[] = $account;
    }
    
    public function removeAccount(BankAccount $account)
    {
        //removes the entered account name from the array of all user's accounts
        //use unset
        
        $key = array_search($account, $this->accounts);
        
        if($key != null) 
        {
            unset($this->accounts[$key]);
        } else
        {
            //error
            throw new NotCustomersAccountException();
        }
    }
    
    public function getAccounts()
    {
        //returns the names of all the user's accounts
        return $this->accounts;
    }
    
    public function getAccount($account)
    {
        //returns the names of all the user's accounts
        return $this->accounts[$account];
    }
    
    public function getBalanceOfAllAccounts()
    {
        //returns the balance of all the user's accounts
        $totalBal = 0.0;
        
        foreach($this->accounts as $account)
        {
            $totalBal += $account->getBalance();
        }
        
        return $totalBal;
       
    }
    
}