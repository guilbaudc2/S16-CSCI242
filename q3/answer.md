Answer: In the Cabbie class, I type-hinted the public static function navigate for objects that implement the Drivable interface.

By type-hinting, I can control what is information is passed to a particular method. This is useful in preventing unexpected results.

If I removed "implements Drivable" from the Chevy class, I will not be able to run the method because navigate only allows for the object $car to be of
the parent or child of a class that implements the Drivable interface.

