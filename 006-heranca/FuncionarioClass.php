<?php

    require_once 'PessoasClass.php';

    class Funcionario extends Pessoas
    {
        //ATRIBUTOS
        private $setor;
        private $trabalhando;

        //MÉTODOS
        public function mudarSetor()
        {
            $this->trabalhando = !$this->trabalhando;
        }

        //MÉTODOS ESPECIAIS 
        public function getSetor()
        {
                return $this->setor;
        }

        public function setSetor($setor)
        {
                $this->setor = $setor;

                return $this;
        }

        public function getTrabalhando()
        {
                return $this->trabalhando;
        }

        public function setTrabalhando($trabalhando)
        {
                $this->trabalhando = $trabalhando;

                return $this;
        }
    }
    

?>