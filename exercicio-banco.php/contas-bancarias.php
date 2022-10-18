<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco - PHP</title>
</head>

<body>
    <pre>
        <?php
            require 'Banco.php';

            $cliente_1 = new Banco(); //Jubileu
            $cliente_2 = new Banco(); //Creuza
 
            $cliente_1->abrirConta("CC");
            $cliente_1->setNumeroConta(101010);
            $cliente_1->setCliente('Jubileu Pitaco');
            $cliente_1->depositar(300);
            $cliente_1->pagarMensalidade();


            $cliente_2->abrirConta("CP");
            $cliente_2->setNumeroConta(111111);
            $cliente_2->setCliente('Creuza Conceição');
            $cliente_2->depositar(500);
            $cliente_2->sacar(1000);
            $cliente_2->pagarMensalidade();

            $cliente_1->sacar(338);
            $cliente_2->sacar(630);
            $cliente_1->fecharConta();
            $cliente_2->fecharConta();

            print_r($cliente_1);
            print_r($cliente_2);
        ?>
    </pre>
</body>
</html>