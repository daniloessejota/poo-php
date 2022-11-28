<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo -> Sobreposição</title>

    <style>
        body {
            font-size: 1.2em;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php

        //Classes
        require_once 'Mamifero.php'; 'Reptil.php'; 'Peixe.php'; 'Ave.php'; 
        //Subclasses
        require_once 'SubCanguru.php'; 
        require_once 'SubCachorro.php';
        require_once 'SubCobra.php';
        require_once 'SubTartaruga.php';
        require_once 'SubArara.php';
        require_once 'SubGoldenFish.php';

        $mamiferos = [];
        $mamiferos[] = new Mamifero();
        $reptil[] =  new Reptil();

        $mamiferos[0] = new Canguru();
        $mamiferos[0]->setCorDoPelo('cinza');

        $mamiferos[1] = new Cachorro();
        $mamiferos[1]->setCorDoPelo("caramelo");

        $reptil[0]= new Cobra();
        $reptil[0]->setCorDasEscamas('marrom');

        $reptil[1] = new Tartaruga();

        $aves[] = new Arara();
        $aves[0]->setCorDaPena('azul');

        $peixe[] = new GoldenFish();
        $peixe[0]->setCorDasEscamas('dourada');
        
        //print_r($mamiferos);
        //exit;

        //Apresentação Canguru
        echo "O Canguru é de cor  {$mamiferos[0]->getCorDoPelo()}, alimentam-se " . $mamiferos[0]->alimentar() . ". O canguru {$mamiferos[0]->locomover()} Eles também {$mamiferos[0]->bolsa()}<br><br> ";

        //Apresentação Cachorro
        echo "O cachorro é de cor  {$mamiferos[1]->getCorDoPelo()}, alimentam-se " . $mamiferos[1]->alimentar() . ". O cachorro {$mamiferos[1]->locomover()} Eles também {$mamiferos[1]->abanarCauda()}<br>";

        //Apresentação Cobra
        echo "<br> A cobra pode ser de cor {$reptil[0]->getCorDasEscamas()}, alimentam-se " . $reptil[0]->alimentar() . ". A cobra {$reptil[0]->locomover()} As cobras também " . $reptil[0]->trocaDePele() . ".<br>";

        //Apresentação Tartaruga
        echo "<br> A tartaruga alimenta-se " . $reptil[1]->alimentar() . ". A tartaruga {$reptil[1]->locomover()} " . $reptil[1]->tempoDeVida() . "<br>";

        //Apresentação Arara
        echo "<br> A arara pode ser de cor {$aves[0]->getCorDaPena()}, alimentam-se " . $aves[0]->alimentar() . ". A arara {$aves[0]->locomover()} As araras emitem um som chamado " . $aves[0]->emitirSom() . ".<br>";
        
        //Apresentação Peixe
        echo "<br> O peixe pode ser de cor {$peixe[0]->getCorDasEscamas()}, alimentam-se " . $peixe[0]->alimentar() . ". O peixe possui" . $peixe[0]->linhaLateral() . ".<br>";

    ?>
</body>

</html>