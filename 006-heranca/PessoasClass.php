<?php

    class Pessoas
    {
        //ATRIBUTOS
        private $nome, $idade, $sexo;

        //MÉTODOS
        public function fazerAniversario()
        {
            $this->idade ++;
        }

        //MÉTODOS ESPECIAIS
        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        
        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade)
        {
                $this->idade = $idade;

                return $this;
        }


        public function getSexo()
        {
                return $this->sexo;
        }

        public function setSexo($sexo)
        {
                $this->sexo = $sexo;

                return $this;
        }
    }
    

?>