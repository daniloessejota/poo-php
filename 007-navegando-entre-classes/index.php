<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Navegando entre Classes - PHP</title>

        <style>
            
            body {
                font-size: 1.2em;
            }

        </style>
    </head>
    <body>
        <pre>
        <?php
            //require_once 'Persona.php';
            require_once 'Visitante.php';
            require_once 'Estudante.php';
            require_once 'EstudanteBolsista.php';
            require_once 'EstudanteTecnico.php';
            require_once 'Docente.php';
            
            // $pessoa_1 = new Persona(); classes abstratas não podem ser instânciadas, ou seja virarem objetos.
            
            $visitante_1 = new Visitante();
            $visitante_1->setNome("Amaral");
            $visitante_1->setIdade(45);
            $visitante_1->setSexo("Masculino");
            $visitante_1->fazerAniversario();
            print_r($visitante_1);

            echo "</br>";
            
            $estudante_1 = new Estudante();
            $estudante_1->setNome("Maria Isabel");
            $estudante_1->setSexo("Feminino");
            $estudante_1->setIdade(22);
            $estudante_1->setCurso("Gastronomia");
            $estudante_1->setMatricula();
            $estudante_1->pagarMensalidade();
            print_r($estudante_1);

            echo "</br>";

            $bolsista_1 = new EstudanteBolsista();
            $bolsista_1->setNome("Mário Gonçalves");
            $bolsista_1->setSexo("Masculino");
            $bolsista_1->setIdade(19);
            $bolsista_1->setCurso("Gastronomia");
            $bolsista_1->setMatricula();
            $bolsista_1->setDescontoBolsa(45);
            $bolsista_1->pagarMensalidade();
            $bolsista_1->renovarBolsa();
            print_r($bolsista_1);

            echo "</br>";

            $tecnico_1 = new EstudanteTecnico();
            $tecnico_1->setNome("Fabiana Maranhão");
            $tecnico_1->setSexo("Feminino");
            $tecnico_1->setIdade(20);
            $tecnico_1->setCurso("Gastronomia");
            $tecnico_1->setMatricula();
            $tecnico_1->setRegistroProfissional();
            $tecnico_1->pagarMensalidade();
            $tecnico_1->setPraticar(false);
            $tecnico_1->praticar();
            print_r($tecnico_1);

            echo "</br>";

            $docente_1 = new Docente();
            $docente_1->setNome("Alexandro Cavalcante");
            $docente_1->setIdade(50);
            $docente_1->setSexo("Masculino");
            $docente_1->setEspecialidade("Gastronomia");
            $docente_1->setSalario(3100);
            //$docente_1->receberAumento(25);
            print_r($docente_1);

        ?>
        </pre>
    </body>
</html>
