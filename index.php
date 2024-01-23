<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-badwords</title>
</head>
<body class="bg-black vh-100">
    <div class="container">
        <div class="row">
            <div class="col-12 p-5">
                <form action="answer.php" method="GET">
                    <div class="row">
                        <div class="col-6">
                            <label for="paragraph" class="py-3 text-white"> Paragrafo: </label>
                            <textarea name="paragrafo" class="form-control" id="paragraph" rows="5"></textarea>
                        </div>
                        <div class="col-6">
                            <label for="bad_word" class="py-3 text-white">Parola che vuoi censurare: </label>
                            <input type="text" name="bad_word" class="form-control" id="bad_word">
                            <div class="mt-3">
                                <button type="submit" class="btn btn-success">Censura</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>