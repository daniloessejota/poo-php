<?php

    require_once "Lutador.php";

    class Lutar 
    {
        //Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $lutaAprovada;


        //Métodos 
        public function marcarLuta($lutador_1, $lutador_2)
        {
            if ($lutador_1->getCategoria() !== $lutador_2->getCategoria() or ($lutador_1 == $lutador_2)){

                $this->lutaAprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;

                return;
            }

            $this->lutaAprovada = true;
            $this->desafiado = $lutador_1;
            $this->desafiante = $lutador_2;
        }

        public function lutar()
        {
            if (!$this->lutaAprovada) {
                echo "A luta não pode acontecer porque não foi aprovada. <br>";
                return;
            }

            $this->desafiado->apresentar();
            $this->desafiante->apresentar();

            $vencedor = rand(0,2);
            switch ($vencedor) {
                case 0://empate
                    echo $vencedor . " " . "Empatou! <br>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                
                case 1: //desafiado vence
                    echo $vencedor . " " .  $this->desafiado->getNome() . " venceu! <br>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                
                case 2: //desafiado perde
                    echo $vencedor . " " . $this->desafiante->getNome(). " venceu! <br>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        }

        //Métodos Especiais

        //Desafiado

        public function getDesafiado()
        {
                return $this->desafiado;
        }

        public function setDesafiado($desafiado)
        {
                $this->desafiado = $desafiado;

                return $this;
        }

        //Desafiante

        public function getDesafiante()
        {
                return $this->desafiante;
        }

        public function setDesafiante($desafiante)
        {
                $this->desafiante = $desafiante;

                return $this;
        }

        //Rounds

        public function getRounds()
        {
                return $this->rounds;
        }

        public function setRounds($rounds)
        {
                $this->rounds = $rounds;

                return $this;
        }

        //Luta Aprovada

        public function getLutaAprovada()
        {
                return $this->lutaAprovada;
        }

        public function setLutaAprovada($lutaAprovada)
        {
                $this->lutaAprovada = $lutaAprovada;

                return $this;
        }
    }
    

?>