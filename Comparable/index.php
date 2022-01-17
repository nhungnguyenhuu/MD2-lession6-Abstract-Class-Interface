<?php
include_once "ComparableCircle.php";

$circle1 = new ComparableCircle("Circle1", 4);
$circle2 = new ComparableCircle("Circle2", 3);
$circle3 = new ComparableCircle("Circle3", 5);

$test = $circle1->compareTo($circle2);
echo "Comparable: <br>";
echo $test;