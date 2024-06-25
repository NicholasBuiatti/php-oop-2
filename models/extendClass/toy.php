<?php

class Toy extends Product
{
    public $material;

    public function __construct($percorsoIimg, $name, $price, AnimalProduct $animalType, $material)
    {
        $this->img = $percorsoIimg;
        $this->name = $name;
        $this->price = $price;
        $this->animalType = $animalType;
        // KEY AGGIUNTA ALLA SOTTOCLASSE TOY CHE è ESTENSIONE DI PRODUCT
        $this->material = $material;
    }
}
