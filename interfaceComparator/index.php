<?php
include_once "CircleComparator.php";

$circle1 = new Circle("Circle1", 4);
$circle2 = new Circle("Circle1", 3);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circle1, $circle2));