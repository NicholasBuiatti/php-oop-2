<?php
// include __DIR__ . "/animalProduct.php";

class Product
{

    public function __construct(public $img, public $name, public $price, public AnimalProduct $animalType)
    {
    }

    public function showDetails()
    {
        return "<img src='$this->img' style='width:100px;height:auto;'><br>
        Nome: $this->name,<br>
        Prezzo: $this->price €,<br>";
    }

    public function getAnimalDetails()
    {
        return $this->animalType->getAnimalDetails();
    }
};
