<?php
interface Drivable
{
     public function drive();
}


class Chevy implements Drivable
{
   public function drive()
   {
     echo "Driving!";
   }
}

class Cabbie
{
     public static function navigate(Drivable $car)
     {
          $car->drive();
     }
}

$chevy = new Chevy();
Cabbie::navigate($chevy);
