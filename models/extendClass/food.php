<?php

class Food extends Product
{
    public $peso;

    public function __construct($percorsoIimg, $name, $price, AnimalProduct $animalType, $peso)
    {
        $this->img = $percorsoIimg;
        $this->name = $name;
        $this->price = $price;
        $this->animalType = $animalType;

        $this->peso = $peso;
    }
}
