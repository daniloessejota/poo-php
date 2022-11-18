<?php

abstract class Persona {
    //ATRIBUTOS
    protected $nome, $sexo;
    protected $idade;
    
    //MÉTODOS
    public final function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1);
    }
    
    //MÉTODOS ESPECIAIS
    public function getNome() {
        return $this->nome;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

}
