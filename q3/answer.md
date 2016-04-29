3) Consider the following code: (15 points)

1 <?php
2 require_once('Twig/Autoloader.php');
3 
4 /* Twig setup */
5 Twig_Autoloader::register();
6 
7 $loader = new Twig_Loader_Filesystem('templates');
8 $twig = new Twig_Environment($loader);

On line 7 a new object is created and stored into a variable called $loader.  This object provides the ability to load templates from the file system.  That variable is then passed on line 8 to the Twig_Enviorment class to create a new object to be stored in the variable $twig.  When you use $twig it now accesses the template using the file system.

a) What OOP pattern is used here?

Answer a) Twig uses the Strategy OOP pattern.

b) What benefit does using this pattern provide to Twig or you?

Answer b) By using the Strategy OOP pattern, it allows for the use of an interface for different strategies while also allowing you to type hint the interface in the class requiring the algorithm.
