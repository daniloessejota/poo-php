<?php

//Uma classe final não pode gerar filhas
final class EstudanteTecnico extends Estudante {
    //ATRIBUTOS
    private $registroProfissional;
    private $praticar;

    //MÉTODOS
    public function praticar()
    {
        if (!$this->getPraticar()) {
           echo "O aluno " . $this->getNome() . " NÃO está em aula prática agora. </br>";
           return;
        }
        
        echo "SIM o aluno " . $this->getNome() . " está em aula prática agora. </br>";
    }

    //MÉTODOS ESPECIAIS
    public function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }

    public function setRegistroProfissional()
    {
        $this->registroProfissional = rand(100001, 999999);

        return $this;
    }
 
    public function getPraticar()
    {
        return $this->praticar;
    }

    public function setPraticar($praticar)
    {
        $this->praticar = $praticar;

        return $this;
    }
}
