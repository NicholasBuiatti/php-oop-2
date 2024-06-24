<?php

include __DIR__ . "/../models/product.php";
include __DIR__ . "/../models/animalProduct.php";
include __DIR__ . "/../models/extendClass/food.php";
include __DIR__ . "/../models/extendClass/toy.php";
include __DIR__ . "/../models/extendClass/bed.php";


$prodotto1 = new Product('.ss', 'ciotola', 14, new AnimalProduct('Cane', './img/dog.jpg'));
$prodottoFood = new Food('./img/cuccia.jpg', 'Cuccia', 12, new AnimalProduct('Cane', './img/dog.jpg'), 2);
$prodottoBed = new Bed('./img/cuccia.jpg', 'Cuccia', 12, new AnimalProduct('Cane', './img/dog.jpg'), 'L');
$prodottoToy = new Toy('./img/cuccia.jpg', 'Cuccia', 12, new AnimalProduct('Cane', './img/dog.jpg'), 'Gomma');
