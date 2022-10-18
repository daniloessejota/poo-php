<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Especiais - PHP</title>
</head>

<body>
    <pre>
    <?php

    require "Caneta.php";

    //utilizando o método construct nós temos a possibilidade de com uma linha de código apenas, criar e atribuir todos os valores de um objeto e assim criar vários objetos de forma prática, fácil e simplificada.

    $caneta_1 = new Caneta("Pilot", "Verde", 0.5); 
    $caneta_2 = new Caneta("Bic", "Azul", 0.7);
    $caneta_3 = new Caneta("Compactor", "Preta", 0.7);

    print_r($caneta_1); 
    print_r($caneta_2); 
    print_r($caneta_3); 

    ?>
    </pre>
</body>

</html>