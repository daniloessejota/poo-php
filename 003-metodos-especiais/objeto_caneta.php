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

    $caneta_1 = new Caneta();

    $caneta_1->setModelo("Pilot");
    $caneta_1->setPonta(0.5); //se o atributo da classe for privado e não usarmos o método set, não vai ser possível alterar o valor dele;

    //print_r($caneta_1);

    echo "A caneta é do modelo {$caneta_1->getModelo()} e a sua ponta tem tamanho de {$caneta_1->getPonta()} mm." // é preciso colocar o chamado do método entre chaves criando um bloco para evitar erros;

    ?>
    </pre>
</body>

</html>