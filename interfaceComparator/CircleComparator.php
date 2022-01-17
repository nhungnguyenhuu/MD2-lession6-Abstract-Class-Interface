<?php
include_once "Circle.php";
include_once "CircleComparator.php";
class CircleComparator implements Comparator
{

    function compare($circle1, $circle2)
    {
        $radius1 = $circle1->getRadius();
        $radius2 = $circle2->getRadius();
        // TODO: Implement compare() method.
        if($radius1 > $radius2){
            return 1;
        } elseif ($radius1<$radius2){
            return -1;
        }
        return 0;
    }
}