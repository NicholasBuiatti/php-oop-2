<?php

class AnimalProduct
{
    public $animalType;
    public $icon;

    public function __construct($animalType, $icon)
    {
        $this->animalType = $animalType;
        $this->icon = $icon;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    // CAPIRE BENE COSA SAREBBE LA FUNZIONE __TOSTRING
    public function __toString()
    {
        return $this->animalType;
    }
}
