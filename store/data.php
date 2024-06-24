<?php

include __DIR__ . "/../models/product.php";
include __DIR__ . "/../models/animalProduct.php";
include __DIR__ . "/../models/extendClass/food.php";
include __DIR__ . "/../models/extendClass/toy.php";
include __DIR__ . "/../models/extendClass/bed.php";

$productStore = [

    new Product('.ss', 'Prodotto Generico', 9.99, new AnimalProduct('Cane', './img/dog.jpg')),
    new Food('./img/cuccia.jpg', 'Crocchette Gatti', 8.99, new AnimalProduct('Gatto', './img/cat.jpg'), 2),
    new Bed('./img/cuccia.jpg', 'Cuccia', 12, new AnimalProduct('Cane', './img/dog.jpg'), 'L'),
    new Toy('./img/cuccia.jpg', 'Paperella', 5.49, new AnimalProduct('Cane', './img/dog.jpg'), 'Gomma'),

];
