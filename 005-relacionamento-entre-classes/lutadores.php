<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultimate Fighting Emoji</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

    </style>
</head>

<body>
    <?php
        require 'Lutador.php';

        $lutador = [];

        $lutador[0] = new Lutador("Pretty Boy \u{1F60E}", "França", 31, 1.75, 68.9, 11, 2, 1);
        echo $lutador[0]->apresentar();

    ?>
</body>

</html>