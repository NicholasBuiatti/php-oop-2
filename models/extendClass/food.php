<?php

class Food extends Product
{
    public function __construct(public $img, public $name, public $price, public AnimalProduct $animalType, public $kg)
    {
    }

    public function showDetails()
    {
        return "<img src='$this->img' style='width:100px;height:auto;'><br>
        Nome: $this->name <br>
        Prezzo: $this->price € <br>
        Peso: $this->kg KG <br>";
    }

    public function getAnimalDetails()
    {
        return $this->animalType->getAnimalDetails();
    }

    public function getProductType()
    {
        return "Food";
    }
}
