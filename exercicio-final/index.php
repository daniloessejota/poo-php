<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Final - POO com PHP</title>

    <style>
        body {
            font-size: 1.2em;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <pre>
        <?php
            spl_autoload_register(function($class)
            {
                require 'classes/' . $class . '.php';
            }
            );

            /* require_once 'Classes/VideoClass.php';
            require_once 'Classes/UsuarioClass.php';
            require_once 'Classes/VisualizacaoClass.php'; */
            
            $videos[0] = new Video('POO com PHP - Polimorfismo');
            $videos[1] = new Video('HTML e CSS - Formulários');
            $videos[2] = new Video('Redes de Computadores - Endereçamento IP');

            $usuario[0] = new Usuario('Marcos Paulo', 'Masculino', '26', 'marcosp');
            $usuario[1] = new Usuario('Isabela Sena', 'Feminino', '22', 'isasena');

            $visualizacao [0] = new Visualizacao($usuario[0], $videos[2]);
            $visualizacao [1] = new Visualizacao($usuario[0], $videos[0]);
            $visualizacao [2] = new Visualizacao($usuario[1], $videos[0]);
            $visualizacao [3] = new Visualizacao($usuario[1], $videos[2]);
            $visualizacao [4] = new Visualizacao($usuario[0], $videos[2]);

            $visualizacao[0]->avaliacaoPorcentagem(90);
            $visualizacao[1]->avaliacaoPorcentagem(80);
            $visualizacao[2]->avaliacaoPorcentagem(40);
            $visualizacao[3]->avaliacaoPorcentagem(100);
            $visualizacao[4]->avaliacaoPorcentagem(70);

            print_r($visualizacao[0]);
            //print_r($visualizacao[1]);
            //print_r($visualizacao[2]);
            print_r($visualizacao[3]);
            print_r($visualizacao[4]);

            //print_r($videos);
            //print_r($usuario);
        ?>
    </pre>
</body>
</html>