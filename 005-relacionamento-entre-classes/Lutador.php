<?php
    class Lutador {
        //Atributos
        private $nome, $nacionalidade;
        private $idade, $altura, $peso;
        private $categoria;
        private $vitorias, $derrotas, $empates;

        //Métodos
        public function apresentar()
        {
            echo "<hr> SENHORAS E SENHORES, COM VOCÊS O LUTADOR " . $this->getNome() . ", do(a) " . $this->getNacionalidade() . " ele tem " . $this->getIdade() . " anos de idade, tem " . $this->getAltura() . " de altura e pesa " . $this->getPeso() . "Kg. Ele também tem " . $this->getVitorias() . " vitórias, " . $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates. <hr>";
        }

        public function status()
        {
            echo $this->getNome() . " tem " . $this->getPeso() . "Kg, " . $this->getCategoria() . ", tem " . $this->getVitorias() . " vitórias, " . $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates.";
        }

        public function ganharLuta()
        {
            $this->setVitorias($this->getVitorias() + 1);

        }

        public function perderLuta()
        {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta()
        {
            $this->setEmpates($this->getEmpates() + 1);
        }

        //Métodos Especiais
        public function __construct($n, $pais, $i, $a, $p, $v, $d, $e)
        {
            $this->nome = $n;
            $this->nacionalidade = $pais;
            $this->idade = $i;
            $this->altura = $a;
            $this->setPeso($p);
            $this->vitorias = $v;
            $this->derrotas = $d;
            $this->empates = $e;
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

        public function getNacionalidade()
        {
                return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade)
        {
                $this->nacionalidade = $nacionalidade;

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

        public function getAltura()
        {
                return $this->altura;
        }


        public function setAltura($altura)
        {
                $this->altura = $altura;

                return $this;
        }

        
        public function getPeso()
        {
                return $this->peso;
        }

        public function setPeso($peso)
        {
                $this->peso = $peso;
                $this->setCategoria($peso);
        }

        public function getCategoria()
        {
                return $this->categoria;
        }

        private function setCategoria($peso)
        {
            switch ($peso) {
                case ($peso <= 52.2 ):
                    $this->categoria = 'lutador desclassificado por estar abaixo do peso inicial para a categoria';
                    break;

                case ($peso <= 70.3):
                    $this->categoria = "peso leve";
                    break;

                case ($peso <= 83.9):
                    $this->categoria = "peso médio";
                    break;

                case ($peso <= 120.2):
                    $this->categoria = "peso pesado";
                    break;
                
                default:
                    $this->categoria = "inválido";
                    break;
            }
        
        }

        public function getVitorias()
        {
                return $this->vitorias;
        }
 
        public function setVitorias($vitorias)
        {
                $this->vitorias = $vitorias;

                return $this;
        }

        public function getDerrotas()
        {
                return $this->derrotas;
        }

        public function setDerrotas($derrotas)
        {
                $this->derrotas = $derrotas;

                return $this;
        }

        public function getEmpates()
        {
                return $this->empates;
        }

        public function setEmpates($empates)
        {
                $this->empates = $empates;

                return $this;
        }
    }
?>