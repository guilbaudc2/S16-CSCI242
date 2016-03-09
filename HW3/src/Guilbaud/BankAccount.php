<?php

namespace Guilbaud;

use Guilbaud\AmountNotPositiveException;
use Guilbaud\AmountNotNumericException;
use Guilbaud\InsufficientFundsException;
use Guilbaud\DepositTooLargeException;

use \Exception;

class BankAccount{
    
    protected $balance = 0.0;
    
    public function __construct()
    {
        //creates and runs das constructor
    }

	public function deposit($amount)
	{
	    //adds the deposit amount to the account's balance
	    if(is_numeric($amount) == True)
	    {
	    	switch ($amount) {
		        case ($amount >= 10000):
		            throw new DepositTooLargeException();
		            break;
		        case ($amount < 0):
		            throw new AmountNotPositiveException();
		            break;
		        default:
		            $this->balance += $amount;
	    	}
	    }else{
	    	throw new AmountNotNumericException();
	    }
	}
	
	public function withdrawal($amount)
	{
		if($amount > $this->balance)
		{
			throw new InsufficientFundsException();
		}else{
	    //withdraws money from the user's account balance
		$this->balance -= $amount;
		}
	}
	
	public function getBalance()
	{
	    //returns the user's current balance
		return $this->balance;
	}
	
}