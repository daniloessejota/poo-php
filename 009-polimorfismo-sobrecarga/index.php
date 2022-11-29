<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo - Sobrecarga</title>

    <style>
        body {
            font-size: 1.2em;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
    
    require_once 'ClassMamifero.php';
    require_once 'SubclassCachorro.php';
    require_once 'SubclassLobo.php';
    //require_once '.php';
    
    $cachorro = new Cachorro();
    $cachorro->setCorDoPelo("branca");

    $lobo = new Lobo();
    $lobo->setCorDoPelo('cinza');

    //Apresentação Cachorro
    echo "O cachorro é de cor  {$cachorro->getCorDoPelo()}, alimentam-se " . $cachorro->alimentar() . ". O cachorro {$cachorro->locomover()} {$cachorro->emitirSom()}<br><br>";

    //Apresentação Lobo
    echo "O lobo é de cor  {$lobo->getCorDoPelo()}, alimentam-se " . $lobo->alimentar() . ". O lobo {$lobo->locomover()} {$lobo->emitirSom()}<br>";

    ?>

</body>

</html>