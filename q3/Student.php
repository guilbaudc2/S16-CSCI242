<?php

/* BEGIN ANSWER SECTION */

class Student {

	private static $name = "";

	/*
	* Accepts: Nothing
	* Returns: Nothing
	* Purpose: Initialize student objects to safe stable state
	*/
	public function __construct()
	{
	}

	/*
	* Accepts: Nothing
	* Returns: string name of the student
	* Purpose: Get the name of the student
	*/
	public function getName()
	{
		return $this->name;
	}

	/*
	* Accepts: string with name of the student
	* Returns: null
	* Purpose: Set the name of the student
	*/
	public function setName($name)
	{
		$this->name = $name;
	}

}
/* END ANSWER SECTION */
