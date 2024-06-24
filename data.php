<?php

include __DIR__ . "/models/product.php";
include __DIR__ . "/models/animalProduct.php";


$prodotto1 = new Product('./img/cuccia.jpg', 'ciotola', '14', new AnimalProduct('Cane', './img/dog.jpg'));
