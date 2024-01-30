<?php

const APP_DIR = __DIR__ . '/';
require_once APP_DIR . "classes/Figure.php";
require_once APP_DIR . "classes/Rectangle.php";
require_once APP_DIR . "classes/Circle.php";


try {
    $rectangle = new Rectangle(2.5, 6.7);
    $rectangleArea = $rectangle->area();
    $rectanglePerimeter = $rectangle->perimeter();
    var_dump($rectangleArea);
    var_dump($rectanglePerimeter);

    $circle = new Circle(5);
    $circleArea = $circle->area();
    $circleLength = $circle->perimeter();
    var_dump($circleArea);
    var_dump($circleLength);
}
catch (Exception $exception){
    echo $exception->getMessage() . PHP_EOL;
}
