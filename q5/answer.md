Constructors initialize object in a safe, stable environment. Destructors do the same, in the opposite manner.
They are called automatically, just like the constructor, and while all classes have a default destructor, you can customize your own destructor 
by adding it to the public function __destruct. There, you can define the destructor to do things like save any open files or break down anything 
that’s still set up in a safe manner.