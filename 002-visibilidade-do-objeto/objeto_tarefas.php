<?php
    require "Tarefas.php";

    $tarefa_1 = new Tarefas;

    $tarefa_1->tarefa = "enviar relatórios das vendas do mês";
    $tarefa_1->prioridade = "alta";
    $tarefa_1->prazo = "03/10/2022";
    $tarefa_1->descricao = "relatórios financeiros apenas";
    $tarefa_1->concluida = false;

    //chamando o metódo
    
    echo $tarefa_1->tarefa . "</br>" . $tarefa_1->prazo . "</br>" .$tarefa_1->prioridade . "</br>" . $tarefa_1->descricao . "</br>";
    echo $tarefa_1->concluida();

?>