<?php

class AnimalProduct extends Product
{

    public function __construct(public $name, public $price, public $img, public $animalType)
    {
    }
}
