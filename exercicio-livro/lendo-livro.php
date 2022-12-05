<!DOCTYPE html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro - PHP</title>

</head>

<body>

     <?php
     
     require_once 'PessoaClass.php';
     require_once 'LivroClass.php';

     $leitores = [];
     $livros = [];

     $leitores[0] = new Pessoa("Neuma Floriano", 29, "feminino");
     $livros[0] = new Livro("Não inventa, Mariana", "Mariana Becker", 272, 102);
     
     $livros[0]->abrir();

     //$leitores[0]->fazerAniversario();

     //$livros[0]->fechar();
     //$livros[0]->folhear();
     //$livros[0]->avancarPagina();
     //$livros[0]->voltarPagina();

     $livros[0]->detalhes($leitores[0], $livros[0]);
     //print_r($livros[0]);

     ?>

</body>

</html>