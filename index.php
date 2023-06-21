<!-- RICHIESTA

-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>PHP Strong Password Generator</title>
        <style>

        </style>
    </head>

    <body>
        <form action="index.php" method="GET">
            <label for="lenPass">Lunghezza password:</label>
            <input type="number" name="lenPass" id="lenPass" value="<?php echo $_GET['lenPass']; ?>">
            <input type="submit" value="INVIA">
        </form>

        <?php
            var_dump($_GET);
            echo "<br />";
            $randString = array();
      
            for ($i=0; $i < $_GET['lenPass']; $i++) { 
                $range = array_merge(range('A', 'Z'),range('a', 'z'),range('0', '9'),range('!', '/'));
                $index = array_rand($range, 1);
                array_push($randString, $range[$index]);
            };

            var_dump(implode($randString));
        ?>
    </body>
</html>