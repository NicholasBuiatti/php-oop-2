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
    <script src="https://kit.fontawesome.com/549ef415f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="bg-dark text-white">
    <h1 class="text-center mb-5">Prodotti per gli animali</h1>

    <section class="container">
        <div class="row justify-content-between">
            <?php foreach ($productStore as $product) { ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?= $product->getImage() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <?php echo $product->getinfo(); ?>
                        <p><?= $product->className() ?></p>
                        <p>Categoria: <?php echo $product->getAnimalDetails(); ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</body>

</html>