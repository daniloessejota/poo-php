<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            //require_once 'Persona.php';
            require_once 'Visitante.php';
            require_once 'Estudante.php';
            
            // $pessoa_1 = new Persona(); classes abstratas não podem ser instânciadas, ou seja virarem objetos.
            
            $visitante_1 = new Visitante();
            $visitante_1->setNome("Amaral");
            $visitante_1->setIdade(45);
            $visitante_1->setSexo("Masculino");
            $visitante_1->fazerAniversario();
            print_r($visitante_1);
            
            $estudante_1 = new Estudante();
            $estudante_1->setNome("Maria Isabel");
            $estudante_1->setSexo("Feminino");
            $estudante_1->setIdade(22);
            $estudante_1->setCurso("Gastronomia");
            $estudante_1->setMatricula();
            $estudante_1->pagarMensalidade();
            print_r($estudante_1);
            
        ?>
        </pre>
    </body>
</html>
