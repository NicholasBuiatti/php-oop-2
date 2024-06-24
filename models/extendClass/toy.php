<?php

class Toy extends Product
{
    public function __construct(public $img, public $name, public $price, public AnimalProduct $animalType, public $material)
    {
    }

    public function showDetails()
    {
        return "<img src='$this->img' style='width:100px;height:auto;'><br>
        Nome: $this->name <br>
        Prezzo: $this->price € <br>
        Materiale: $this->material <br>";
    }

    public function getAnimalDetails()
    {
        return $this->animalType->getAnimalDetails();
    }
}
