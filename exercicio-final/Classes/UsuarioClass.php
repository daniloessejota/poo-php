<?php
    require_once 'PessoaClass.php';

    class Usuario extends PessoaClass 
    {
        //ATRIBUTOS
        private $login;
        private $totalAssistido;

        //METÓDOS
        public function __construct($n, $s, $i, $l) //(nome, idade, sexo -> construct da Super Classe Abstrata Pessoa) e login
        {
            parent::__construct($n, $i, $s); //chamada para o método construtor da Super Classe Pessoa
            $this->setLogin($l);
            $this->setTotalAssistido(0);
        }
        public function assistido()
        {
            $this->setTotalAssistido($this->getTotalAssistido() + 1);
        }
        
        //MÉTODOS ESPECIAIS
        public function getLogin()
        {
                return $this->login;
        }

        public function setLogin($login)
        {
                $this->login = $login;

                return $this;
        }


        public function getTotalAssistido()
        {
                return $this->totalAssistido;
        }

        public function setTotalAssistido($totalAssistido)
        {
                $this->totalAssistido = $totalAssistido;

                return $this;
        }
    }