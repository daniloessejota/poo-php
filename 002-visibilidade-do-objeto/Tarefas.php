<?php

class Tarefas { 
    //atributos
    var $tarefa;
    var $prazo;
    var $prioridade;
    var $descricao;
    var $concluida;

    //metódos
    function concluida() {
        if ($this->concluida != false) {
            echo " a tarefa está concluída";
        } else {
            echo " a tarefa não foi concluída ainda.";
        }
    }
}

?>