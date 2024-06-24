<?php

include __DIR__ . "/store/data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog&Cat</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>Prodotti</h1>

    <p><?php echo $prodottoFood->showDetails() . $prodottoFood->getAnimalDetails(); ?></p>
    <p><?php echo $prodottoBed->showDetails() . $prodottoBed->getAnimalDetails(); ?></p>
    <p><?php echo $prodottoToy->showDetails() . $prodottoToy->getAnimalDetails(); ?></p>
</body>

</html>