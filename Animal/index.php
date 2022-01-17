<?php
include_once "Animal.php";
include_once "Animal/Chicken.php";
include_once "Animal/Tiger.php";

echo "--------Animals";
$animals [0]= new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal){
    echo $animals->makeSound()."<br>";
    if($animals instanceof Chicken){
        echo $animals->howToEat()." ";
    }

}