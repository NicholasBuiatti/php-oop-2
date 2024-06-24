<?php

include __DIR__ . "/models/product.php";
include __DIR__ . "/models/animalProduct.php";


$prodotto1 = new Product('ciotola', '14euro', 'blu');
$prodotto2 = new AnimalProduct('Crocchette', '2euro', 'giallo', 'Cane');
