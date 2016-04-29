1) Describe the factory pattern and its purpose?

The factory is a static class that can provide all the logic for your app. It can eliminate if/then statements by determining which class is needed and will handle instatiation of that class.

The Ullman book uses the ShapeFactory example where ShapeFactory.php is a static class that has only one method and no attributes. The ShapeFactory.php file can then be used with the abstract class Shape (which contains abstract functions) to find the area or perimeter of a given shape, like a triangle or a rectangle.