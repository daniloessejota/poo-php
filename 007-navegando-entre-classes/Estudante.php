<?php

//A Classe Estudante é filha de Persona e sua herança é do tipo Herança para Diferença.
//Nesse tipo de classe você herda as características da superclasse ou classe mãe, mas com diferenças.

require_once 'Persona.php';

class Estudante extends Persona {
    //ATRIBUTOS
    private $matricula;
    private $curso;
    
    //MÉTODOS
    public function pagarMensalidade() {
        echo 'Pagando a mensalidade do aluno ' . $this->getNome() . '</br>';
    }
    
    //MÉTODOS ESPECIAIS
    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula(){
        $this->matricula = rand(1001, 99999);
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }

}
