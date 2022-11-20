<?php

class Docente extends Persona {
    //ATRIBUTOS
    private $especialidade;
    private $salario;

    //MÉTODOS
    public function receberAumento($aumento)//o valor aumento é uma porcentagem
    {
        $this->setSalario($this->getSalario() + ($this->getSalario() * $aumento * 0.01));
    }

    //MÉTODOS ESPECIAIS
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
}
