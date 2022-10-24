<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto - PHP</title>
</head>
<body>

    <pre>
        <?php
        
        require "ControleRemotoClass.php";
        
        $controle = new ControleRemoto();
        $controle->desligar();
        $controle->maisVolume();
        $controle->maisVolume();
        $controle->menosVolume();
        $controle->abrirMenu();

        ?>

    </pre>
    
</body>
</html>