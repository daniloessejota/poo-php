<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança - PHP</title>
</head>

<body>
    <pre>
        <?php
            require_once 'PessoasClass.php'; //não é obrigatório
            require_once 'AlunoClass.php';
            require_once 'ProfessorClass.php';
            require_once 'FuncionarioClass.php';

            $pessoa = [];

            $pessoa[0] = new Pessoas();
            $pessoa[1] = new Aluno();
            $pessoa[2] = new Professor();
            $pessoa[3] = new Funcionario();

            $pessoa[0]->setNome("Pedro");
            $pessoa[1]->setNome("Maria");
            $pessoa[2]->setNome("Cláudio");
            $pessoa[3]->setNome("Fabiana");

            $pessoa[0]->setIdade(18);
            $pessoa[1]->setIdade(21);
            $pessoa[2]->setIdade(45);
            $pessoa[3]->setIdade(32);

            $pessoa[0]->setSexo("M");
            $pessoa[1]->setSexo("F");
            $pessoa[2]->setSexo("M");
            $pessoa[3]->setSexo("F");

            $pessoa[1]->setCurso("Informática");
            $pessoa[2]->setSalario(2250);
            $pessoa[3]->setSetor("Secretaria");

            $pessoa[1]->setMatricula();
            $pessoa[2]->setEspecialidade("Lógica de Programação");

            $pessoa[2]->receberAumento(10); //10%
            $pessoa[3]->mudarSetor();
            $pessoa[1]->cancelarMatricula();

            print_r($pessoa);
        ?>
    </pre>
</body>

</html>