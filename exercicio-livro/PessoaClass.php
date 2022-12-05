<?php

    class Pessoa 
    {
        //Atributos

        private $nome, $idade, $sexo;

        //Métodos

        public function fazerAniversario()
        {
            $this->idade ++; 
        }

        //Métodos Especiais
        public function __construct($n, $i, $s)
        {
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
        }

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