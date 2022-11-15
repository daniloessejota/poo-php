<?php
    require_once 'PessoasClass.php';

    class Professor extends Pessoas
    {
        //ATRIBUTOS
        private $especialidade, $salario;

        //MÉTODOS 
        public function receberAumento($aumento)
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
    

?>