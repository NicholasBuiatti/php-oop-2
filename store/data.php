<?php

include __DIR__ . "/../models/product.php";
include __DIR__ . "/../models/animalProduct.php";
include __DIR__ . "/../models/extendClass/food.php";
include __DIR__ . "/../models/extendClass/toy.php";
include __DIR__ . "/../models/extendClass/bed.php";

// CREO LE ISTANZE CANE E GATTO
$dogProduct = new AnimalProduct('Cane', '<i class="fa-solid fa-dog"></i>');
$catProduct = new AnimalProduct('Gatto', '<i class="fa-solid fa-cat"></i>');

// CREAZIONE VARIABILI PER LA CREAZIONE OGGETTI
$guinzaglio = new Product('https://picsum.photos/200', 'Prodotto Generico', 9.99, $catProduct);
$crocchetteGatti = new Food('https://picsum.photos/200', 'Crocchette Gatti', 8.99, $catProduct, 2);
$cucciaCane = new Bed('https://picsum.photos/200', 'Cuccia per Cani', 12, $dogProduct, 'L');
$giocattoloCane = new Toy('https://picsum.photos/200', 'Paperella', 5.49, $dogProduct, 'Gomma');

// CREO L'ARRAY PER CONTENERE TUTTI I PRODOTTI
$productStore = [
    $guinzaglio,
    $crocchetteGatti,
    $cucciaCane,
    $giocattoloCane,

];
