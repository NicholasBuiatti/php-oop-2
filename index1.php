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
    <h1>Prodotti</h1>

    <section class="container">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="<?= $crocchetteGatti->getImage() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <?php echo $crocchetteGatti->getinfo(); ?>
                    <p>Categoria: <?php echo $crocchetteGatti->getAnimalDetails(); ?></p>
                </div>
            </div>
        </div>
    </section>

    <pre>
        <?php var_dump($productStore) ?>
    </pre>

</body>

</html>