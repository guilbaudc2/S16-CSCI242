<?php
require('Faculty.php');
require('Faculty2.php');

use WinthropUniversity\Wingspan\Entity\Faculty;
use WinthropUniversity\DegreeWorks\Faculty as DWFaculty;

$faculty1 = new Faculty(); //Faculty.php
$faculty2 = new DWFaculty(); //Faculty2.php

$faculty1->doWork();
echo "<br>";
$faculty2->doOtherWork();
