<?php

class Bed extends Product
{
    public $size;

    public function __construct($percorsoIimg, $name, $price, AnimalProduct $animalType, $size)
    {
        $this->img = $percorsoIimg;
        $this->name = $name;
        $this->price = $price;
        $this->animalType = $animalType;

        $this->size = $size;
    }
}
