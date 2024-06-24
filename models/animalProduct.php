<?php

class AnimalProduct
{

    public function __construct(public $animalType, public $icon)
    {
    }

    public function getAnimalDetails()
    {
        return "Categoria: $this->animalType <img src='$this->icon' style='width:20px;height:auto;'>";
    }

    // CAPIRE BENE COSA SAREBBE LA FUNZIONE __TOSTRING
    public function __toString()
    {
        return $this->animalType;
    }
}
