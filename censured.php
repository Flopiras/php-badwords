<?php

// recupero parola da censurare
$word = $_GET["word"];

// recupero il paragrafo 
$paragraph = $_GET["paragraph"];


$new_word = str_replace($word, "***", $paragraph)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h3>Il tuo testo è: </h3>
        <p><?= $paragraph ?></p>

        <p>La tua frase contiene <?= strlen($paragraph) ?> parole</p>

        <h2>Testo censurato :</h2>
        <p><?= $new_word ?></p>
        <p>La tua frase contiene <?= strlen($new_word) ?> parole</p>
    </div>
</body>

</html>