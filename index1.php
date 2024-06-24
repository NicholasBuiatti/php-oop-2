<?php

include __DIR__ . "/data.php";

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

    <ul>
        <li><?php foreach ($prodotto2 as $key => $value) {
                echo "$key : $value <br>";
            }  ?></li>
    </ul>
</body>

</html>