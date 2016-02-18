<?php

/* BEGIN ANSWER SECTION */

require_once("Programmer.php");
require_once("CoolProgrammer.php");


$regularProgrammer = new Programmer();
echo $regularProgrammer->getGreeting();

/*
* If only you could make a CoolProgrammer that
* had everything the regular Programmer had...
* just cooler...
*/

echo "<br>";

$coolProgrammer = new CoolProgrammer();
echo $coolProgrammer->getGreeting();

/* END ANSWER SECTION */
