<?php

class SimpleAccount
{
	
	
	/* BEGIN ANSWER SECTION */
	
	private $balance = 0.0;
	
	public function __construct()
	{
		//runs the constructor
	}
	
	public function deposit($amount)
	{
		$this->balance /*+*/= $amount; //ans: $this->balance += $amount;
	}
	
	public function withdrawal($amount)
	{
		$this->balance -= $amount;
	}
	
	public function getBalance()
	{
		return $this->balance;
	}
	

	/* END ANSWER SECTION */

}
