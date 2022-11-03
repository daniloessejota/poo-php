<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultimate Fighting Emoji</title>

    <style>
        body {
            font-size: 1.5em;
        }

    </style>
</head>

<body>
    <pre><?php
        require_once 'Lutador.php';
        require_once 'Lutar.php';

        $lutador = [];

        $lutador[0] = new Lutador("Pretty Boy \u{1F60E}", "França \u{1F1EB}\u{1F1F7}", 31, 1.75, 68.9, 11, 2, 1);
        $lutador[1] = new Lutador("Putscript \u{1F620}", "Brasil \u{1F1E7}\u{1F1F7}", 29, 1.68, 57.8, 14, 2, 3);
        $lutador[2] = new Lutador("SnapShadow \u{1F601}", "EUA \u{1F1FA}\u{1F1F8}", 35, 1.65, 80.9, 12, 2, 1);
        $lutador[3] = new Lutador("Dead Code \u{1F480}", "Austrália \u{1F1E6}\u{1F1FA}", 28, 1.93, 81.6, 13, 0, 2);
        $lutador[4] = new Lutador("UFOCobol \u{1F47D}", "Brasil \u{1F1E7}\u{1F1F7}", 37, 1.70, 119.3, 5, 4, 3);
        $lutador[5] = new Lutador("Nerdart \u{1F913}", "EUA \u{1F1FA}\u{1F1F8}", 30, 1.81, 105.7, 12, 2, 4);

        $ufe_01 = new Lutar();
        $ufe_01->marcarLuta($lutador[2], $lutador[3]);
        $ufe_01->lutar();

        //$lutador[0]->status();
        //$lutador[1]->status();

    ?></pre>
    
</body>

</html>