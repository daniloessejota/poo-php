<?php

    abstract class PessoaClass 
    {
        //ATRIBUTOS
        protected $nome;
        protected $idade;
        protected $sexo;

        //MÉTODOS 
        public function __construct($n, $i, $s) //nome, idade, sexo
        {
            $this->setIdade($i);
            $this->setNome($n);
            $this->setSexo($s);
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
    