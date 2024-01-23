<?php

$paragrafo = $_GET['paragrafo'];
$bad_word = $_GET['bad_word'];
$paragrafo_censurato = str_replace($bad_word, '***', $paragrafo);

$lung_paragrafo = strlen($paragrafo);
$lung_paragrafo_censored = strlen($paragrafo_censurato);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-badwords</title>
</head>
<body class="vh-100 bg-black">
    <div class="container">
        <div class="row">
            <div class="col-12 p-5 text-white">
                <h2>No censura: </h2>
                <p> <?php echo $paragrafo ?></p>
                <p>Il paragrafo è lungo: <?php echo $lung_paragrafo ?></p>
            </div>
            <div class="col-12 p-5 text-white">
                <h2>Censored: </h2>
                <p> <?php echo $paragrafo_censurato ?></p>
                <p>Il paragrafo censurato è lungo: <?php echo $lung_paragrafo_censored ?></p>
            </div>
        </div>
    </div>
</body>
</html>