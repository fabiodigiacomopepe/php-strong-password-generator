<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Pagina Password</title>
    </head>

    <body>
        <div class="password">
            <h1>La password generata è:</h1>
            <?php
                session_start();
                $val = $_SESSION['stringa'];

                echo $val;
            ?> 
        </div>

        <div>
            <a href="./index.php">Torna Indietro</a>
        </div>
    </body>
</html>
