<?php
class Product
{
    public $img;
    public $name;
    public $price;
    //CLASSE CATEGORIA CREATA A SE
    public $animalType;

    public function __construct($percorsoIimg, $name, $price, AnimalProduct $animalType)
    {
        $this->img = $percorsoIimg;
        $this->name = $name;
        $this->price = $price;
        $this->animalType = $animalType;
    }

    public function getImage()
    {
        return $this->img;
    }

    public function getInfo()
    {
        return "Nome: <h3>$this->name</h3>
                Prezzo: <h3>$this->price €</h3>";
    }

    public function getAnimalDetails()
    {
        return $this->animalType->getIcon();
    }
};
