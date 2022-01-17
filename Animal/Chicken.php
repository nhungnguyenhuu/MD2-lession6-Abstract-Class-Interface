<?php

class Chicken extends Animal implements Edible
{

    public function makeSound()
    {
        return "Chicken: Cluck-cluck";
    }

    public function howToEat()
    {
        // TODO: Implement howToEat() method.
        return "could be fried";
    }
}